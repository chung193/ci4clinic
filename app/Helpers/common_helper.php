<?php 

if (!function_exists('create_slug')) {
    function formatDate($olddate){
        $now = time();                  //pick present time from server     
        $old = strtotime( $olddate);  //create integer value of old time
        $diff =  $now-$old;             //calculate difference
        $old = new DateTime($olddate);
        $old = $old->format('Y M d');       //format date to "2015 Aug 2015" format

            if ($diff /60 <1)                       //check the difference and do echo as required
            {
                return intval($diff%60)." giây trước";
            }
            else if (intval($diff/60) == 1) 
            {
                return " 1 phút trước";
            }
            else if ($diff / 60 < 60)
            {
                return intval($diff/60)." phút trước";
            }
            else if (intval($diff / 3600) == 1)
            {
                return "1 giờ trước";
            }
            else if ($diff / 3600 <24)
            {
                return intval($diff/3600) . " giờ trước";
            }
            else if ($diff/86400 < 30)
            {
                return intval($diff/86400) . " ngày trước";
            }
            else
            {
                return $old;  ////format date to "2015 Aug 2015" format
            }
    }
}

if (!function_exists('price_format')) {
    function price_format($number)
    {
        return number_format($number, 0, '', ',');
    }
}

if (!function_exists('check_child_array')) {
    function check_child_array($id, $arr)
    {
        foreach($arr as $val){
            if($val['parent_id'] == $id)
                return 1;
        }
        return 0;
    }
}

if (!function_exists('check_child_array_page')) {
    function check_child_array_page($id, $arr)
    {
        foreach($arr as $val){
            if($val['cat_id'] == $id)
                return 1;
        }
        return 0;
    }
}

// search name product
if (!function_exists('search_text')) {
    function search_text($string, $text)
    {
        if(strstr($string, $text)){
            $new_string = str_replace($text,'<strong class="highlight">'.$text.'</strong>',$string);
            return $new_string;
        }else{
            return $string;
        }
    }
}
/**
 * Chuyển đổi chuỗi kí tự thành dạng slug dùng cho việc tạo friendly url.
 * @access    public
 * @param string
 * @return    string
 */
if (!function_exists('create_slug')) {
    function create_slug($string)
    {
        $search = array(
            '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
            '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
            '#(ì|í|ị|ỉ|ĩ)#',
            '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
            '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
            '#(ỳ|ý|ỵ|ỷ|ỹ)#',
            '#(đ)#',
            '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
            '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
            '#(Ì|Í|Ị|Ỉ|Ĩ)#',
            '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
            '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
            '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
            '#(Đ)#',
            "/[^a-zA-Z0-9\-\_]/",
        );
        $replace = array(
            'a',
            'e',
            'i',
            'o',
            'u',
            'y',
            'd',
            'A',
            'E',
            'I',
            'O',
            'U',
            'Y',
            'D',
            '-',
        );
        $string = preg_replace($search, $replace, $string);
        $string = preg_replace('/(-)+/', '-', $string);
        $string = strtolower($string);
        return $string;
    }
}
?>