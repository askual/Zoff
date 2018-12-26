<?php

namespace Modules\Theme\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Option;
use App\Page;
use App\PageType;
class AdminController extends Controller
{
    private $theme = "";
    public function __construct(){
		$this->middleware('isAdmin');
		$this->theme = Option::where('name','theme_current')->first()->value;
    }
    public function setting(){
		$themeSettings = [];
		$d = dir(base_path('Themes'));
		while (false !== ($entry = $d->read())) {
			if($entry!="." && $entry!=".."){
				$folder = $entry;
				$json_path = base_path('Themes/'.$folder.'/config/theme.json');
				$handle = file_get_contents($json_path, "r");
				$zjson = json_decode($handle);
				if($this->theme==$entry){
					$zjson->active = true;
				}else{
					$zjson->active = false;
				}
				$themeSettings[$entry] = $zjson;
			}
		}
		$d->close();

		$themeOptions = $themeSettings[$this->theme]->options;
		foreach ($themeOptions as $key => $value) {
			$value->value = Option::where('name','themes_'.$this->theme.'_'.$value->name)->first()->value;
		}
		$sth = [
			'site_name' => Option::where('name','site_name')->first()->value,
			'site_description' => Option::where('name','site_description')->first()->value,
			// 'theme_current'=> $theme_current,
			'themeSettings' => $themeSettings,
			'themeOptions' => $themeOptions,
		];
		return view('theme::admin.setting',$sth);

	}
	public function setting_edit(Request $request){
		if(isset($request['site_name'])){
			$o1 = Option::where('name','site_name')->first();
			$o1->value  = $request['site_name'];
			$o1->save();
		}
		if(isset($request['site_description'])){
			$o2 = Option::where('name','site_description')->first();
			$o2->value  = $request['site_description']." ";
			$o2->save();
		}
		if(isset($request['theme_current'])){
			$o2 = Option::where('name','theme_current')->first();
			$o2->value  = $request['theme_current'];
			$o2->save();
		}
		return redirect()->back();
	}
	public function setting_theme_edit(Request $request){
		foreach (Collect($request->all())->except('_token') as $name=>$value) {
			// echo $single_request."<br>";
			$o1 = Option::where('name','themes_'.$this->theme."_".$name)->first();
			$o1->value  = $value;
			$o1->save();
		}
		return redirect()->back();
		return $request->all();
		return $request->all();
    }
    
    public function pages(){
		$widgets_path = base_path('Themes/'.$this->theme.'/config/widgets.php');
		include_once $widgets_path;
		return view('theme::admin.pages',['pages'=>Page::all(),'widgets'=>$widgets,'page_types'=> PageType::all()]);
    }
    
	public function page_edit(Request $request){
		// return json_decode("[".$request['body']."]");
		// return strlen($request['body']);
		$p = Page::find($request['id']);
		if($request['body']==""){
			$p->body = [];
		}else{
			$p->body = json_decode("[".$request['body']."]");
		}
		$p->save();
		return redirect()->back();
	}
}