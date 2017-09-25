<?php

namespace App\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Mail;
use Zipper;
use Carbon;
use PDF;
use DB;
use File;
<<<<<<< HEAD
use App\Mail\UpdateAccount;
=======
use App\Mail\DemoAccount;
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
use App\User;
use App\Models\Mt4User;
use App\Models\Mt4Setting;
use App\Models\RequestAccount;
use App\Models\RequestUpdateAccount;
use App\Models\AccountType;
<<<<<<< HEAD
use App\Models\UserTask;
use Illuminate\Support\Facades\Input;
use App\Models\Notification;
=======
use Illuminate\Support\Facades\Input;
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
class RealAccountController extends Controller
{
    public function index()
    {
	  $user_id = Auth::user()->id;
	  $email = Auth::user()->email;
<<<<<<< HEAD
	  $task = UserTask::where('user_id', $user_id)->where('task_id', 3)->first();
	  $is_active = $task->is_active;
	  $reals = RequestAccount::where('user_id',$user_id)->where('status','approved')->first();
	  $acc = RequestAccount::where('user_id',$user_id)->first();
	  if(!empty($reals)){
	  $date = date_create($reals->dob);
	  $reals->dob = date_format($date,"d-m-Y");
	  $path[0] = $fullpath = '/pdf/'.Auth::user()->id.'/'.$reals->order_number.'/PBK01.pdf';
	  $path[1] = $fullpath = '/pdf/'.Auth::user()->id.'/'.$reals->order_number.'/PBK02-1.pdf';
	  $path[2] = $fullpath = '/pdf/'.Auth::user()->id.'/'.$reals->order_number.'/PBK02-2.pdf';
	  $path[3] = $fullpath = '/pdf/'.Auth::user()->id.'/'.$reals->order_number.'/PBK03.pdf';
	  $path[4] = $fullpath = '/pdf/'.Auth::user()->id.'/'.$reals->order_number.'/PBK04-1.pdf';
	  $path[5] = $fullpath = '/pdf/'.Auth::user()->id.'/'.$reals->order_number.'/PBK05-1.pdf';
	  $path[6] = $fullpath = '/pdf/'.Auth::user()->id.'/'.$reals->order_number.'/PBK06.pdf';
	  $path[7] = $fullpath = '/pdf/'.Auth::user()->id.'/'.$reals->order_number.'/PBK07.pdf';
	  $path[8] = $fullpath = '/pdf/'.Auth::user()->id.'/'.$reals->order_number.'/PBK08.pdf';
	  return view('admin.account.real-account',['reals'=> $reals,'email'=>$email,'path'=> $path,'is_active'=>$is_active,'acc'=>$acc]);
	  }
	  else{
		return view('admin.account.real-account',['reals'=> $reals,'email'=>$email,'acc'=>$acc]);  
	  }
	  
      
=======
	  $reals = RequestAccount::where('user_id',$user_id)->where('status','approved')->get();
      return view('admin.account.real-account',['reals'=> $reals,'email'=>$email]);
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
    }
	
	public function agreement_post(Request $request)
	{
	  $today = Carbon::now();	
	  $data = Auth::user()->approvedRequestAccount();
	  $data['today'] = $today;
<<<<<<< HEAD
	  $date = date_create($data->dob);
	  $data->dob = date_format($date,"d-m-Y");
      $pdf = PDF::loadView('admin.account.pernyataan',compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id.'/'.$request->order);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/'.$request->order.'/PBK08.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/'.$request->order.'/PBK08.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/'.$request->order.'/PBK08.pdf'), $output);  
=======
      $pdf = PDF::loadView('admin.account.form.107_PBK_07_download',compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id.'/'.$request->order);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/'.$request->order.'/PBK07.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/'.$request->order.'/PBK07.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/'.$request->order.'/PBK07.pdf'), $output);  
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
	  }
	  $path = public_path('/pdf/'.Auth::user()->id.'/'.$request->order);

	  $filepath = 'pdf/'.Auth::user()->id.'/'.$request->order.'/RequestAccount-'.$data['nama'].'-'.$request->order.'.zip';
	  if(file_exists($filepath)){
	    File::delete($filepath);
	  }
	  $files = glob($path.'/*');
	  Zipper::make($filepath)->add($files)->close();
	  RequestAccount::where('order_number', $request->order)->update(['agreement' => 'ya','docs' => $filepath]);
	  Mt4User::where('order_number', $request->order)->update(['docs' => $filepath]);
	  return back();
	}
	
	public function update_data_account($id = false){
        $accountType = accountType::all();
        $account = RequestAccount::find($id);
<<<<<<< HEAD
		$temp = array();
		$temp = explode('.',$account->rek_koran);
		$ext = $temp[1];
        return view('admin.account.update-real-account-detail', ['order' => $account, 'accountType' => $accountType, 'ext'=>$ext]);
=======
        return view('admin.account.update-real-account-detail', ['order' => $account, 'accountType' => $accountType]);
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
    }
	
	public function update_data_account_do(Request $request){
		$data = RequestAccount::where('order_number',$request->order_number)->first();
        if(!empty(Input::file('id_card'))){
			$image = Input::file('id_card');
			$input['imagename'] = 'id_card.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/'.Auth::user()->id);
			if(!file_exists($destinationPath)){
				$result = File::makeDirectory($destinationPath, 0775, true);
			}else{
			}
			$image->move($destinationPath, $input['imagename']);
			$fullpath = '/uploads/'.Auth::user()->id.'/'.$input['imagename'];
			$id_card = $fullpath;
		}else{
			$id_card = $data->id_card;
		}
        
		if(!empty(Input::file('rek_koran'))){
			$image = Input::file('rek_koran');
			$input['imagename'] = 'rek_koran.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/'.Auth::user()->id);
				if(!file_exists($destinationPath)){
					$result = File::makeDirectory($destinationPath, 0775, true);
				}else{
				}
			$image->move($destinationPath, $input['imagename']);
			$fullpath = '/uploads/'.Auth::user()->id.'/'.$input['imagename'];
			$rek_koran = $fullpath;
		}else{
			$rek_koran = $data->rek_koran;
		}
		
		if(!empty(Input::file('foto'))){
			$image = Input::file('foto');
			$input['imagename'] = 'foto.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/'.Auth::user()->id);
			if(!file_exists($destinationPath)){
				$result = File::makeDirectory($destinationPath, 0775, true);
			}else{
			}
			$image->move($destinationPath, $input['imagename']);
			$fullpath = '/uploads/'.Auth::user()->id.'/'.$input['imagename'];
			$foto = $fullpath;
		}else{
			$foto = $data->foto;
		}
		
        // dd($request->approval_yes);
<<<<<<< HEAD
		$dob = strtotime($request->dob);
		$dob = date('Y-m-d',$dob);
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
	  RequestUpdateAccount::create([
            'user_id' => Auth::user()->id,
			'account_type_id' => 1,
            'order_number' => $request->order_number,
			'nama' => $request->name,
            'tempat_lahir' => $request->place,
<<<<<<< HEAD
      			'dob' => $dob,
=======
      			'dob' => $request->dob,
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
      			'alamat' => $request->alamat,
      			'tipe_id' => $request->identity_type,
      			'no_id' => $request->identity_number,
      			'phone_number' => $request->phone_number,
      			'pengalaman' => $request->pengalaman,
      			'tujuan' => $request->tujuan,
				'status' => 'pending',
      			'npwp' => $request->npwp,
      			'jenis_kelamin' => $request->jenis_kelamin,
      			'status_perkawinan' => $request->status_perkawinan,
      			'nama_ibu' => $request->ibu,
      			'kode_pos' => $request->postcode,
      			'status_rumah' => $request->status_rumah,
      			'telp_rumah' => $request->telpon_rumah,
      			'keluarga_kbi' => $request->keluarga_kbi,
      			'pailit' => $request->pailit,
      			'nama_darurat' => $request->name_darurat,
      			'telp_darurat' => $request->telp_darurat,
      			'hubungan' => $request->hubungan_darurat,
      			'alamat_darurat' => $request->alamat_darurat,
      			'pekerjaan' => $request->pekerjaan,
      			'nama_perusahaan' => $request->nama_perusahaan,
      			'bidang_usaha' => $request->bidang_usaha,
      			'jabatan' => $request->jabatan,
      			'lama_bekerja' => $request->lama_bekerja,
      			'alamat_kantor' => $request->alamat_kantor,
      			'kode_pos_kantor' => $request->postcode_kantor,
      			'telp_kantor' => $request->telp_kantor,
      			'kantor_sebelum' => $request->kantor_sebelum,
      			'nama_bank' => $request->nama_bank,
      			'cabang' => $request->cabang,
      			'telp_bank' => $request->telp_bank,
      			'no_rek' => $request->no_rek,
      			'nama_rek' => $request->nama_rek,
      			'jenis_tabungan' => $request->jenis_tabungan,
      			'id_card' => $id_card,
      			'rek_koran' => $rek_koran,
      			'foto' => $foto,
				'phone_number' => $request->phone_number,
<<<<<<< HEAD
				'aproval_yes' => $request->approval_yes,
				'kode_pos_darurat' => $request->postcode_darurat,
				'penghasilan' => $request->penghasilan,
				'njop' => $request->njop,
				'lokasi_rumah' => $request->lokasi_rumah,
				'deposito_bank' => $request->deposito_bank,
				'deposito' => $request->deposito,
				'daftar_kekayaan' => $request->daftar_kekayaan,
				'pasangan' => $request->pasangan
        ]);
		Notification::create([
            'user_id' => '1',
            'title' => 'permintaan update data pribadi A/N '.$data->nama,
            'url' => route('approve.update.account')
        ]);
		Mail::to(env('DEFAULT'))->send(new UpdateAccountRequest($request));
		Mail::to(env('EMAIL1'))->send(new UpdateAccountRequest($request));
		Mail::to(env('EMAIL2'))->send(new UpdateAccountRequest($request));
=======
				'aproval_yes' => $request->approval_yes
        ]);
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
	  return redirect()->route('real.account.user');
    }
}
