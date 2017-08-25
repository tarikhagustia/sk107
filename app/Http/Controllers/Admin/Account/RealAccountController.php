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
use App\Mail\DemoAccount;
use App\User;
use App\Models\Mt4User;
use App\Models\Mt4Setting;
use App\Models\RequestAccount;
use App\Models\RequestUpdateAccount;
use App\Models\AccountType;
use Illuminate\Support\Facades\Input;
class RealAccountController extends Controller
{
    public function index()
    {
	  $user_id = Auth::user()->id;
	  $email = Auth::user()->email;
	  $reals = RequestAccount::where('user_id',$user_id)->where('status','approved')->get();
      return view('admin.account.real-account',['reals'=> $reals,'email'=>$email]);
    }
	
	public function agreement_post(Request $request)
	{
	  $today = Carbon::now();	
	  $data = Auth::user()->approvedRequestAccount();
	  $data['today'] = $today;
      $pdf = PDF::loadView('admin.account.form.107_PBK_07_download',compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id.'/'.$request->order);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/'.$request->order.'/PBK07.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/'.$request->order.'/PBK07.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/'.$request->order.'/PBK07.pdf'), $output);  
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
        return view('admin.account.update-real-account-detail', ['order' => $account, 'accountType' => $accountType]);
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
	  RequestUpdateAccount::create([
            'user_id' => Auth::user()->id,
			'account_type_id' => 1,
            'order_number' => $request->order_number,
			'nama' => $request->name,
            'tempat_lahir' => $request->place,
      			'dob' => $request->dob,
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
				'aproval_yes' => $request->approval_yes
        ]);
	  return redirect()->route('real.account.user');
    }
}
