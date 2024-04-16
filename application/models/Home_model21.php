<?php
class Home_model21 extends CI_Model
{
    function CallAPI($method, $url, $header, $data = false)
    {
        $curl = curl_init();
        switch ($method)
        {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                              
                break;
            case "PATCH":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                              
                break;
            case "DELETE":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($curl);
        $result = curl_getinfo($curl,CURLINFO_HTTP_CODE);
        $err = curl_error($curl);
        curl_close($curl);

        // print_r($result);echo "<pre>";
        // print_r($res);echo "<pre>";
        // print_r($err);echo "<pre>";exit;
        $response['status'] = $result;
        $response['response'] = json_decode($res);
        $response['err'] = $err;

        return json_encode($response);
    }

    public function createRazorpayOrder($ordAmount)
    {
        $url = 'https://api.razorpay.com/v1/orders';
        $apiKey = RAZOR_PAY_TEST_KEY;
        $apiSecret = RAZOR_PAY_SECRET_KEY;

        $data = array(
            "amount" => $ordAmount,
            "currency" => "INR",
            "receipt" => "InstaApp-One-Time-Payment",
            "partial_payment" => false
            // "first_payment_min_amount" => $ordAmount
        );

        $headers = array(
            'Content-Type: application/json'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ':' . $apiSecret);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        curl_close($ch);

        // Process the response or return it to the caller
        return $response;
    }
}
?>