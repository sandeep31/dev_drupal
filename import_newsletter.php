    <?php
    $webform = 4439;
    $file = __FILE__.'/uaol_users';



    if (($handle = fopen($file, "r")) !== FALSE) {
        $i=0;
        while (($data1 = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if($i==0){
                continue;
            }    


            $data[1][0] = !empty($data1[0])?$data1[0]:'';
            $data[2][0] =  '';
            $data[3][0] = !empty($email) ?$email : '';

            $submission = (object) array(
                'nid' => $webform,
                'uid' => 0,
                'submitted' => REQUEST_TIME,
                'remote_addr' => ip_address(),
                'is_draft' => FALSE,
                'data' => $data,
            );


            //    module_load_include('inc', 'webform', 'includes/webform.submissions');
            //    webform_submission_insert($node, $submission);

            $i++;
        }
        fclose($handle);
    }





