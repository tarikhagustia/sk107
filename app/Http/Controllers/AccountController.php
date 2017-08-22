<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Auth;
use Mail;
use Zipper;
use File;
use App\Mail\RealAccount;
use App\Models\RequestAccount;
use App\Models\Mt4User;
use App\Models\UserTask;
use App\Models\Notification;
use App\Models\AccountType;
class AccountController extends Controller
{
  public function index()
  {
    $order = Auth::user()->lastRequestAccount();
	$accountType = accountType::all();
	$order2 = RequestAccount::where('user_id',Auth::user()->id)->where('status','request')->first();
	$order3 = RequestAccount::where('user_id',Auth::user()->id)->where('status','rejected')->first();
	if(!empty($order)){
		return view('admin.account.open_account', ['order' => $order]);
	}elseif(!empty($order2)){
		return view('admin.account.real-account-request-data',['order' => $order2, 'accountType' => $accountType]);
	}elseif(!empty($order3)){
		return view('admin.account.real-account-update-rejected',['order' => $order3, 'accountType' => $accountType]);
	}
    
  }
  public function post_request_account_real(Request $request)
  {
    $order = Auth::user()->lastRequestAccount();

    if($request->order_id != $order->id){
      return redirect()->back()->with(['error' => 'Invalid Order ID']);
    }
	$path = public_path('/pdf/'.Auth::user()->id.'/'.$order['order_number']);
	$filepath = 'pdf/'.Auth::user()->id.'/'.$order['order_number'].'/RequestAccount-'.$order['nama'].'-'.$order['order_number'].'.zip';
	if(file_exists($filepath)){
	    File::delete($filepath);
	  }
	  $files = glob($path.'/*');
	  Zipper::make($filepath)->add($files)->close();
	  RequestAccount::where('order_number',$order['order_number'])->update(['docs' => $filepath,'status' => 'request']);
	  Mt4User::where('order_number', $order['order_number'])->update(['docs' => $filepath]);
	  Mail::to(env('OPENREAL_EMAIL'))->send(new RealAccount($order, $filepath));
	  Notification::create([
        'user_id' => 1,
        'title' => 'Permintaan pembukaan akun A/N ' . $order->nama,
        'url' => route('account.real.manage', ['id' => $order->id])
      ]);

    return redirect()->route('create.account.real.finish');

  }
  
  public function pengalaman_check(Request $request)
  {	
	$order = Auth::user()->lastRequestAccount();
	RequestAccount::where('id',$request->request_id)->update(['pengalaman_yes' => $request->pengalaman]);	  
	if($request->pengalaman == 'tidak'){
	  UserTask::where('request_account_id',$request->request_id)->where('task_id','3')->update(['is_active' => 'no']);
	}
	return redirect()->route('create.account.real');
  }
  
  public function request_finish(Request $request){
    return view('admin.account.create-account-finish');
  }
  
  public function update_rejected_request(Request $request){
	$order = RequestAccount::where('order_number',$request->order_number)->first();
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
			$id_card = $order->id_card;
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
			$rek_koran = $order->rek_koran;
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
			$foto = $order->foto;
		}
		
        // dd($request->approval_yes);
		
	  RequestAccount::where('order_number', $order->order_number)->update([
            'user_id' => Auth::user()->id,
			      'account_type_id' => 1,
				  'status' => 'request',
            'nama' => $request->name,
            'tempat_lahir' => $request->place,
      			'dob' => $request->dob,
      			'alamat' => $request->alamat,
      			'tipe_id' => $request->identity_type,
      			'no_id' => $request->identity_number,
      			'phone_number' => $request->phone_number,
      			'pengalaman' => $request->pengalaman,
      			'tujuan' => $request->tujuan,
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
            'aproval_yes' => $request->approval_yes
        ]);
		$today = Carbon::now();	
	  $data = Auth::user()->lastRequestAccount();	
	  $data['today'] = $today;
	  
	  $tipe = DB::table('request_accounts')
            ->join('account_types', 'request_accounts.account_type_id', '=', 'account_types.id')
            ->select('account_types.account_name')
			->where('request_accounts.user_id',Auth::user()->id)
            ->first();
			
	  $data['account_type'] = $tipe->account_name;
	  if($data['account_type'] == 'mini'){
		$data['account_nominal'] = '0.1';
	  }elseif($data['account_type'] == 'reguler'){
		$data['account_nominal'] = '1';
	  }
	  $data['id_card'] = public_path($data['id_card']);
	  $data['rek_koran'] = public_path($data['rek_koran']);
	  $data['foto'] = public_path($data['foto']);
	  $dob = strtotime($data['dob']);
	  $data['dob'] = date('j F Y',$dob);
      $pdf = PDF::loadView('admin.account.form.107_PBK_03_download',compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id.'/'.$data['order_number']);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/'.$data['order_number'].'/PBK03.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/'.$data['order_number'].'/PBK03.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/'.$data['order_number'].'/PBK03.pdf'), $output);  
	  }
    return view('admin.account.create-account-finish');
  }
}
