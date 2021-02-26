<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
class AdmitcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getAdmitcard($user_slug)
     {


     	// if(!getSetting('certificate','module'))
     	// {
     	// 	pageNotFound();
     	// 	return back();
     	// }
      //
     	// $record = User::where('slug', $slug)->get()->first();
      //
      //
      //
      //    if($isValid = $this->isValidRecord($record))
      //     return redirect($isValid);
      //
      // 	$user = getUserRecord($record->user_id);
      //
      // 	$quiz_record = App\Quiz::where('id','=',$record->quiz_id)->first();
      //
      //
      // 	    /**
      //     * Make sure the Admin or staff cannot edit the Admin/Owner accounts
      //     * Only Owner can edit the Admin/Owner profiles
      //     * Admin can edit his own account, in that case send role type admin on condition
      //     */
      //    $current_user = \Auth::user();
      //      $UserOwnAccount = FALSE;
      // if($current_user->id == $user->id)
      //  $UserOwnAccount = TRUE;
      //
      //  if(!$UserOwnAccount)  {
      //    $current_user_role = getRoleData($$current_user->role_id);
      //
      //    if((($current_user_role=='admin' || $current_user_role == 'owner') ))
      //    {
      //      if(!checkRole(getUserGrade(1))) {
      //        prepareBlockUserMessage();
      //        return back();
      //      }
      //    }
      //  }
      //
      //
      //    $data['active_class']       = 'analysis';
      //    $data['result']       		= $record;
      //    $data['user']       		= $user;
      //
      //    $certificate_data = [];
      //    $certificate_data['username'] = ucfirst($user->name);
      //    $certificate_data['course_name'] = ucfirst($quiz_record->title);
      //    $certificate_data['marks'] = $record->marks_obtained.' ('.$record->percentage.'%)';
      //
      //    $content = \Blade::compileString($this->getContentTemplate());
      //
      //    $result = $this->render($content, $certificate_data);
      //
      //
      //    $data['content']       		= $result;
      //
      //    $data['title']              = getPhrase('certificate_generation');
     	return view('admitcard');
     }
}
