<?php 

class Response {
    public int $status_code = 200;
    public Array $response = Array();

    public function status(int $new_status_code)
    {
        $this->status_code = $new_status_code;
        return $this;
    }

    public function response(Array $response)
    {
        $this->response = $response;
        return $this;
    }
}
