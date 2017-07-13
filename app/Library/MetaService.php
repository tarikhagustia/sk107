<?php

namespace App\Library;

class MetaService {

    protected $socket;
    protected $host;
    protected $port;
    protected $user;
    protected $attributes = array();
    protected $request_type;
    public $response;
    public function __construct()
    {
        $this->attributes['MASTER'] = env('MT_MASTER_PASSWORD');
    }
    public function setHost($host, $port)
    {
        $this->host = $host;
        $this->port = $port;

        $this->__sockOpen($this->host, $this->port);

        return $this;
    }
    public function createAccount($array)
    {
        $this->request_type = "NEWACCOUNT";
        foreach($array as $key => $val):
            $this->attributes[$key] = $val;
        endforeach;
        $this->__run();
        return $this->response;
    }
    public function __sockOpen($host, $port)
    {
        $this->socket = fsockopen($host, 443);
        return $this;
    }
    private function __run()
    {
        $line = "";
        foreach($this->attributes as $key => $row):
            $delimiter  = ($line == "") ? "" : "|";
            $line = $line . $delimiter . $key . "=" . $row;
        endforeach;
        $request = "W" . $this->request_type . " " . $line . "\nQUIT\n";
        $ptr = $this->socket;

        // dd($request);
        if($ptr)
        {
            if(fputs($ptr,  $request) != FALSE)
            {
                $ret = '';
                while(!feof($ptr))
                {
                    $line=fgets($ptr,128);
                    if($line=="end\r\n"):
                        break;
                    else:
                        $array[] = preg_replace('/\r|\n/', '', $line);
                        $ret.= $line;
                    endif;
                }
				
            }
            fclose($ptr);
            $response['status'] = ($array[0] == "ERROR") ? false : true;
            if(!$response['status'])
            $response['result']['message'] = $array[1];
            else
            $response['result']['account'] = explode('=', $array[1])[1];
            $this->response = $response;

        }

    }
    public function close()
    {
        fclose($this->socket);

        return $this;
    }

}
