<?php
class IcomModel extends CI_Model {

    function __construct()
    {
	parent::__construct();
    }
    
    function IcomAuthentication()
    {
	$username = $this->input->post('UserName');
	$password = md5($this->input->post('PassWord'));
	$sql="SELECT * FROM user where USER_NAME='$username' AND USER_PASSWD='$password'";
	$query = $this->db->query($sql, $return_object = TRUE);
	
	if($query != NULL)
	{
	    return $query->result_array();
	}
	else
	{
	    return false;
	}
    }
    
    function User_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    "USER_NAME" => $this->input->post('UserName'),
	    "USER_EMAIL" => $this->input->post('UserEmail'),
	    "USER_PASSWD" => md5($this->input->post('UserPassword')),
	    "USER_CR_UID" => $session_data
	);
	$this->db->insert('user',$data);
    }
    
    function GetUser()
    {
	return $this->db->get("user")->result_array();
    }
    
    function GetEditUser($id)
    {
	$this->db->where("USER_ID",$id);
	return $this->db->get("user")->result_array();
    }
    
    function UpdateUser($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    "USER_NAME" => $this->input->post('UserName'),
	    "USER_EMAIL" => $this->input->post('UserEmail'),
	    "USER_PASSWD" => md5($this->input->post('UserPassword')),
	    "USER_UPT_UID" => $session_data
	);
	$this->db->where("USER_ID",$id);
	$this->db->update('user',$data);
    }
    
    function UserCheck($id)
    {
	$this->db->where('USER_NAME',$id);
	$sql = $this->db->get("user")->result_array();
	return count($sql);
    }
    
    function Country_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    "CN_CODE" => $this->input->post('CountryCode'),
	    "CN_DESC" => $this->input->post('CountryDesc'),
	    "CN_CR_UID" => $session_data
	);
	$this->db->insert('country',$data);
    }
    
    function GetCountry()
    {
	return $this->db->get("country")->result_array();
    }
    
    function GetEditCountry($id)
    {
	$this->db->where("CN_CODE",$id);
	return $this->db->get("country")->result_array();
    }
    
    function UpdateCountry($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    "CN_CODE" => $this->input->post('CountryCode'),
	    "CN_DESC" => $this->input->post('CountryDesc'),
	    "CN_UPD_UID" => $session_data
	);
	$this->db->where('CN_CODE',$id);
	return $this->db->update('country',$data);
    }
    
    function State_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    "ST_CODE" => $this->input->post('StateCode'),
	    "ST_DESC" => $this->input->post('StateDesc'),
	    "ST_CN_CODE" => $this->input->post('StateCountryCode'),
	    "ST_CR_UID" => $session_data,
	);
	$this->db->insert('state',$data);
    }
    
    function GetState()
    {
	return $this->db->get("state")->result_array();
    }
    
    function GetEditState($id)
    {
	$this->db->where("ST_CODE",$id);
	return $this->db->get("state")->result_array();
    }
    
    function UpdateState($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    "ST_CODE" => $this->input->post('StateCode'),
	    "ST_DESC" => $this->input->post('StateDesc'),
	    "ST_CN_CODE" => $this->input->post('StateCountryCode'),
	    "ST_UPD_UID" => $session_data,
	);
	$this->db->where('ST_CODE',$id);
	return $this->db->update('state',$data);
    }
    
    function City_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    "CITY_CODE" => $this->input->post('CityCode'),
	    "CITY_DESC" => $this->input->post('CityDesc'),
	    "CITY_ACTIVE_YN" => $this->input->post('CITY_ACTIVE_YN'),
	    "CITY_CR_UID" => $session_data
	);
	$this->db->insert('city',$data);
    }
    
    function GetCity()
    {
	return $this->db->get("city")->result_array();
    }
    
    function GetEditCity($id)
    {
	$this->db->where("CITY_CODE",$id);
	return $this->db->get("city")->result_array();
    }
    
    function UpdateCity($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    "CITY_CODE" => $this->input->post('CityCode'),
	    "CITY_DESC" => $this->input->post('CityDesc'),
	    "CITY_ACTIVE_YN" => $this->input->post('CITY_ACTIVE_YN'),
	    "CITY_CR_UID" => $session_data
	);
	$this->db->where("CITY_CODE",$id);
	$this->db->update('city',$data);
    }
    
    function Area_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    "AR_CODE" => $this->input->post('AreaCode'),
	    "AR_DESC" => $this->input->post('AreaDesc'),
	    "AR_CT_CODE" => $this->input->post('AreaCityCode'),
	    "AR_ACTIVE_YN" => $this->input->post('AR_ACTIVE_YN'),
	    "AR_CR_UID" => $session_data
	);
	$this->db->insert('area',$data);
    }
    
    function GetArea()
    {
	return $this->db->get("area")->result_array();
    }
    
    function GetEditArea($val)
    {
	$this->db->where("AR_CODE",$val);
	return $this->db->get("area")->result_array();
    }
    
    function GetCityCode()
    {
	return $this->db->get("city")->result_array();
    }
    
    function GetEmpName()
    {
	return $this->db->get("emp_detail")->result_array();
    }
    
    function GetResident($id)
    {
	$this->db->where("CUST_ID",$id);
	return $this->db->get("cust_detail")->result_array();
    }
    
    function UpdateArea($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    "AR_CODE" => $this->input->post('AreaCode'),
	    "AR_DESC" => $this->input->post('AreaDesc'),
	    "AR_CT_CODE" => $this->input->post('AreaCityCode'),
	    "AR_ACTIVE_YN" => $this->input->post('AR_ACTIVE_YN'),
	    "AR_UPD_UID" => $session_data
	);
	$this->db->where("AR_CODE",$id);
	$this->db->update('area',$data);
    }
    
    function Customer_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data=array(
	    'CUST_CODE'=>$this->input->post('CUST_CODE'),
	    'CUST_NAME'=>$this->input->post('CUST_NAME'),
	    'CUST_RESI_TYPE'=>$this->input->post('CUST_RESI_TYPE'),
	    'CUST_EMAIL'=>$this->input->post('CUST_EMAIL'),
	    'CUST_ADD1'=>$this->input->post('CUST_ADDRESS1'),
	    'CUST_ADD2'=>$this->input->post('CUST_ADDRESS2'),
	    'CUST_MOBILE_NO'=>$this->input->post('CUST_MOBILE_NO'),
	    'CUST_CT_CODE'=>$this->input->post('CUST_CT_CODE'),
	    'CUST_AR_CODE'=>$this->input->post('CUST_AR_CODE'),
	    'CUST_EMP_LAST_VISIT'=>$this->input->post('CUST_EMP_LAST_VISIT'),
	    'CUST_FEEDBACK'=>$this->input->post('CUST_FEEDBACK'),
	    'CUST_CR_UID'=>$session_data
	);
	$this->db->insert('cust_detail',$data);
    }
    
    function GetCustomer()
    {
	return $this->db->get("cust_detail")->result_array();
    }
    
    function GetEditCustomer($id)
    {
	$this->db->where("CUST_ID",$id);
	return $this->db->get("cust_detail")->result_array();
    }
    
    function AjaxGetState($StateValue)
    {
	$this->db->where("CITY_CN_CODE",$StateValue);
	return $this->db->get('city')->result_array();
    }
    
    function AjaxGetArea($CityValue)
    {
	$this->db->where("AR_CT_CODE",$CityValue);
	return $this->db->get('area')->result_array();
    }
    
    function UpdateCustomer($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data=array(
	    'CUST_CODE'=>$this->input->post('CUST_CODE'),
	    'CUST_NAME'=>$this->input->post('CUST_NAME'),
	    'CUST_RESI_TYPE'=>$this->input->post('CUST_RESI_TYPE'),
	    'CUST_EMAIL'=>$this->input->post('CUST_EMAIL'),
	    'CUST_ADD1'=>$this->input->post('CUST_ADDRESS1'),
	    'CUST_ADD2'=>$this->input->post('CUST_ADDRESS2'),
	    'CUST_MOBILE_NO'=>$this->input->post('CUST_MOBILE_NO'),
	    'CUST_CT_CODE'=>$this->input->post('CUST_CT_CODE'),
	    'CUST_AR_CODE'=>$this->input->post('CUST_AR_CODE'),
	    'CUST_EMP_LAST_VISIT'=>$this->input->post('CUST_EMP_LAST_VISIT'),
	    'CUST_FEEDBACK'=>$this->input->post('CUST_FEEDBACK'),
	    'CUST_UPD_UID'=>$session_data
	);
	$this->db->where("CUST_ID",$id);
	$this->db->Update('cust_detail',$data);
    }
    
    function Supplier_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data=array(
	    'SUPL_COMPANY'=>$this->input->post('SUPL_COMPANY'),
	    'SUPL_PRODUCT'=>$this->input->post('SUPL_PRODUCT'),
	    'SUPL_PERSON_NAME'=>$this->input->post('SUPL_PERSON_NAME'),
	    'SUPL_EMAIL'=>$this->input->post('SUPL_EMAIL'),
	    'SUPL_ADD1'=>$this->input->post('SUPL_ADD1'),
	    'SUPL_ADD2'=>$this->input->post('SUPL_ADD2'),
	    'SUPL_MOBILE'=>$this->input->post('SUPL_MOBILE'),
	    'SUPL_PHONE'=>$this->input->post('SUPL_PHONE'),
	    'SUPL_POSTAL'=>$this->input->post('SUPL_POSTAL'),
	    'SUPL_FAX'=>$this->input->post('SUPL_FAX'),
	    'SUPL_CT_CODE'=>$this->input->post('SUPL_CT_CODE'),
	    'SUPL_AR_CODE'=>$this->input->post('SUPL_AR_CODE'),
	    'SUPL_ACC_NUM'=>$this->input->post('SUPL_ACC_NUM'),
	    'SUPL_BANK_NAME'=>$this->input->post('SUPL_BANK_NAME'),
	    'SUPL_BRANCH_CODE'=>$this->input->post('SUPL_BRANCH_CODE'),
	    'SUPL_IFSC_CODE'=>$this->input->post('SUPL_IFSC_CODE'),
	    'SUPL_ACTIVE_YN'=>$this->input->post('SUPL_ACTIVE_YN'),
	    'SUPL_CR_UID'=>$session_data
	);
	$this->db->insert('supplier_detail',$data);
    }
    
    function GetSupplier()
    {
	return $this->db->get("supplier_detail")->result_array();
    }
    
    function GetEditSupplier($id)
    {
	$this->db->where("SUPL_ID",$id);
	return $this->db->get("supplier_detail")->result_array();
    }
    
    function UpdateSupplier($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data=array(
	    'SUPL_COMPANY'=>$this->input->post('SUPL_COMPANY'),
	    'SUPL_PRODUCT'=>$this->input->post('SUPL_PRODUCT'),
	    'SUPL_PERSON_NAME'=>$this->input->post('SUPL_PERSON_NAME'),
	    'SUPL_EMAIL'=>$this->input->post('SUPL_EMAIL'),
	    'SUPL_ADD1'=>$this->input->post('SUPL_ADD1'),
	    'SUPL_ADD2'=>$this->input->post('SUPL_ADD2'),
	    'SUPL_MOBILE'=>$this->input->post('SUPL_MOBILE'),
	    'SUPL_PHONE'=>$this->input->post('SUPL_PHONE'),
	    'SUPL_POSTAL'=>$this->input->post('SUPL_POSTAL'),
	    'SUPL_FAX'=>$this->input->post('SUPL_FAX'),
	    'SUPL_CT_CODE'=>$this->input->post('SUPL_CT_CODE'),
	    'SUPL_AR_CODE'=>$this->input->post('SUPL_AR_CODE'),
	    'SUPL_ACC_NUM'=>$this->input->post('SUPL_ACC_NUM'),
	    'SUPL_BANK_NAME'=>$this->input->post('SUPL_BANK_NAME'),
	    'SUPL_BRANCH_CODE'=>$this->input->post('SUPL_BRANCH_CODE'),
	    'SUPL_IFSC_CODE'=>$this->input->post('SUPL_IFSC_CODE'),
	    'SUPL_ACTIVE_YN'=>$this->input->post('SUPL_ACTIVE_YN'),
	    'SUPL_CR_UID'=>$session_data
	);
	$this->db->where('SUPL_ID',$id);
	return $this->db->update('supplier_detail',$data);
    }
    
    function Emp_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	
	if($_FILES['EMP_IMAGE_FILE']['name']=="")
	{
         $path=$this->input->post('GET_EMP_IMAGE_FILE');
	}
	else{
	$config['upload_path']='application/uploads/';
	$config['allowed_types']='gif|jpg|png';
	$this->load->library('upload',$config);
	$this->upload->do_upload('EMP_IMAGE_FILE');
	$data= $this->upload->data();
	$path = $data['file_name'];
	$target_file = base_url().$config['upload_path'].$path;
	}
	
	$data=array(
	    'EMP_NAME'=>$this->input->post('EMP_NAME'),
	    'EMP_DESIGNATION'=>$this->input->post('EMP_DESIGNATION'),
	    'EMP_EMAIL'=>$this->input->post('EMP_EMAIL'),
	    'EMP_ADD1'=>$this->input->post('EMP_ADD1'),
	    'EMP_ADD2'=>$this->input->post('EMP_ADD2'),
	    'EMP_PHONE_NO'=>$this->input->post('EMP_PHONE_NO'),
	    'EMP_MOBILE_NO'=>$this->input->post('EMP_MOBILE_NO'),
	    'EMP_IMAGE_FILE'=>$target_file,
	    'EMP_CT_CODE'=>$this->input->post('EMP_CT_CODE'),
	    'EMP_AR_CODE'=>$this->input->post('EMP_AR_CODE'),
	    'EMP_ACTIVE_YN'=>$this->input->post('EMP_ACTIVE_YN'),
	    'EMP_CR_UID'=>$session_data
	);
	
	$this->db->insert('emp_detail',$data);
    }
    
    function GetEmp()
    {
	return $this->db->get("emp_detail")->result_array();
    }
    
    function GetEditEmp($id)
    {
	$this->db->where("EMP_ID",$id);
	return $this->db->get("emp_detail")->result_array();
    }
    
    function UpdateEmp($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	$config['upload_path']='application/uploads/';
	$config['allowed_types']='gif|jpg|png';
	$this->load->library('upload',$config);
	$this->upload->do_upload('EMP_IMAGE_FILE');
	$data= $this->upload->data();
	$path = $data['file_name'];
	$target_file = $path;
	$path1 =base_url().$config['upload_path'].$path;
	if($_FILES['EMP_IMAGE_FILE']['name']=="")
    	{
    	    $path1=$this->input->post('GET_EMP_IMAGE_FILE');
	}
	else
	{
	    $path1 =base_url().$config['upload_path'].$path;
	}
	
	$data=array(
	    'EMP_NAME'=>$this->input->post('EMP_NAME'),
	    'EMP_DESIGNATION'=>$this->input->post('EMP_DESIGNATION'),
	    'EMP_EMAIL'=>$this->input->post('EMP_EMAIL'),
	    'EMP_ADD1'=>$this->input->post('EMP_ADD1'),
	    'EMP_ADD2'=>$this->input->post('EMP_ADD2'),
	    'EMP_PHONE_NO'=>$this->input->post('EMP_PHONE_NO'),
	    'EMP_MOBILE_NO'=>$this->input->post('EMP_MOBILE_NO'),
	    'EMP_IMAGE_FILE'=>$path1,
	    'EMP_CT_CODE'=>$this->input->post('EMP_CT_CODE'),
	    'EMP_AR_CODE'=>$this->input->post('EMP_AR_CODE'),
	    'EMP_ACTIVE_YN'=>$this->input->post('EMP_ACTIVE_YN'),
	    'EMP_CR_UID'=>$session_data
	);
	
	$this->db->where('EMP_ID',$id);
	return $this->db->update('emp_detail',$data);
    }
    
    function Product_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	
	if($_FILES['ProductImage']['name']=="")
	{
         $path=$this->input->post('GetProductImage');
	}
	else{
	$config['upload_path']='application/uploads/';
	$config['allowed_types']='gif|jpg|png';
	$this->load->library('upload',$config);
	$this->upload->do_upload('ProductImage');
	$data= $this->upload->data();
	$path = $data['file_name'];
	$target_file = base_url().$config['upload_path'].$path;
	}
	
	$data = array(
	    "PR_NAME" => $this->input->post('ProductName'),
	    "PR_DESC" => $this->input->post('ProductDesc'),
	    "PR_IMAGE" => $target_file,
	    "PR_ACTIVE_YN" => $this->input->post('PR_ACTIVE_YN'),
	    "PR_CR_UID" => $session_data
	);
	$this->db->insert('product_detail',$data);
    }
    
    function GetProduct()
    {
	return $this->db->get("product_detail")->result_array();
    }
    
    function GetEditProduct($id)
    {
	$this->db->where("PR_ID",$id);
	return $this->db->get("product_detail")->result_array();
    }
    
    function UpdateProduct($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	$config['upload_path']='application/uploads/';
	$config['allowed_types']='gif|jpg|png';
	$this->load->library('upload',$config);
	$this->upload->do_upload('ProductImage');
	$data= $this->upload->data();
	$path = $data['file_name'];
	$target_file = $path;
	$path1 =base_url().$config['upload_path'].$path;
	if($_FILES['ProductImage']['name']=="")
    	{
    	    $path1=$this->input->post('GetProductImage');
	}
	else
	{
	    $path1 =base_url().$config['upload_path'].$path;
	}
	$data = array(
	    "PR_NAME" => $this->input->post('ProductName'),
	    "PR_DESC" => $this->input->post('ProductDesc'),
	    "PR_IMAGE" => $path1,
	    "PR_ACTIVE_YN" => $this->input->post('PR_ACTIVE_YN'),
	    "PR_UPD_UID" => $session_data
	);
	$this->db->where('PR_ID',$id);
	return $this->db->update('product_detail',$data);
    }
    
    public function serviceHeadAdd()
    {
	$dataCount = count($this->input->post('SL_LINE_NO[]'));
	$product = array();
	for ($i=0; $i<$dataCount-1; $i++)
	{
	    if($_POST['LINE_TYPE'][$i]=='new'){
		array_push($product, $_POST['SL_PROD_TYPE'][$i]);
	    }
	}
	$ProductType = implode ("," , $product);
	$session_data = $this->session->userdata('USER_NAME');
	$Type = $_POST['SH_CUST_ID'];
	if($Type==""){
	$data = array(
	    'CUST_CODE'  => $this->input->post('SH_CUST_CODE'),
	    'CUST_NAME'  => $this->input->post('SH_CUST_NAME'),
	    'CUST_RESI_TYPE'  => $this->input->post('SH_CUST_RESI_TYPE'),
	    'CUST_EMAIL' => $this->input->post('SH_CUST_EMAIL'),
	    'CUST_ADD1'   => $this->input->post('SH_CUST_ADD1'),
	    'CUST_ADD2' => $this->input->post('SH_CUST_ADD2'),
	    'CUST_MOBILE_NO' => $this->input->post('SH_MOBILE_NO'),
	    'CUST_CT_CODE' => $this->input->post('SH_CT_CODE'),
	    'CUST_AR_CODE' => $this->input->post('SH_AR_CODE'),
	    'CUST_CR_UID' => $session_data,
	);
	$this->db->insert('cust_detail',$data);
	$CustId = $this->db->insert_id();
	}else{
	    $CustId = $this->input->post('SH_CUST_ID');
	}
	
	$data = array(
	    
	    'SH_CUST_ID' => $CustId,
	    'SH_CUST_CODE'  => $this->input->post('SH_CUST_CODE'),
	    'SH_CUST_TYPE'  => $this->input->post('SH_CUST_TYPE'),
	    'SH_CUST_NAME'  => $this->input->post('SH_CUST_NAME'),
	    'SH_MOBILE_NO' => $this->input->post('SH_MOBILE_NO'),
	    'SH_AR_CODE'   => $this->input->post('SH_AR_CODE'),
	    'SH_CT_CODE' => $this->input->post('SH_CT_CODE'),
	    'SH_TXN_DT' => $this->input->post('SH_TXN_DT'),
	    'SH_CALL_TYPE' => $this->input->post('SH_CALL_TYPE'),
	    'SH_EMP_ID' => $this->input->post('SH_EMP_ID'),
	    'SH_ESTIMATED_AMT' =>$this->input->post('SH_ESTIMATED_AMT'),
	    'SH_ITEM_STATUS' => REQ,
	    'SH_AMT_RECVD' => $this->input->post('SH_AMT_RECVD'),
	    'SH_FEEDBACK' => $this->input->post('SH_FEEDBACK'),
	    'SH_TIME_IN' => $this->input->post('SH_TIME_IN'),
	    'SH_TIME_OUT' => $this->input->post('SH_TIME_OUT'),
	    'SH_EMP_SPEND_TIME' => $this->input->post('SH_EMP_SPEND_TIME'),
	    'SH_COMMIT_DT' => $this->input->post('SH_COMMIT_DT'),
	    'SH_NT_COMMIT_DT' => $this->input->post('SH_NT_COMMIT_DT'),
	    'SH_CUST_APPR_YN' => $this->input->post('SH_CUST_APPR_YN'),
	    'SH_INFORM_CUST_YN' => $this->input->post('SH_INFORM_CUST_YN'),
	    'SH_DELIVERY_YN' => $this->input->post('SH_DELIVERY_YN'),
	    'SH_PRODUCT_TYPE' => $ProductType,
	    'SH_CR_UID' => $session_data,
	);
	//echo "<pre>";
	//print_r($data);
	//exit;
	$this->db->insert('service_head',$data);
	$query=$this->db->insert_id();
	for ($i=0; $i<$dataCount-1; $i++)
	{
	    if($_POST['LINE_TYPE'][$i]=='new'){
		$this->addServiceLines($i,$query);
	    }
	    else if($_POST['LINE_TYPE'][$i]=='edit'){
		$this->EditLines($i);
	    }
	    else{
		$this->DeleteLines($i);
	    }
	}
    }
    
    function addServiceLines($i,$query){
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    'SL_SH_SYS_ID'=>$query,
	    'SL_LINE_NO'  => $_POST['SL_LINE_NO'][$i],
	    'SL_PROD_TYPE' => $_POST['SL_PROD_TYPE'][$i],
	    'SL_ISSUE_FROM_CUST' => $_POST['SL_ISSUE_FROM_CUST'][$i],
	    'SL_FOUND_BY_EMP' =>$_POST['SL_FOUND_BY_EMP'][$i],
	    //'SL_ESTIMATED_AMT' => $_POST['SL_ESTIMATED_AMT'][$i],
	    'SL_FEEDBACK' => $_POST['SL_FEEDBACK'][$i],
	    'SL_CR_UID' => $session_data,
	);
	
	$this->db->insert('service_line',$data);
    }
    
    function Service_Edit($id){
	$session_data = $this->session->userdata('USER_NAME');
	$Type = $_POST['SH_CUST_TYPE'];
	$CustId = $_POST['SH_CUST_ID'];
	$data = array(
	    'CUST_CODE'  => $this->input->post('SH_CUST_CODE'),
	    'CUST_NAME'  => $this->input->post('SH_CUST_NAME'),
	    'CUST_RESI_TYPE'  => $this->input->post('SH_CUST_RESI_TYPE'),
	    'CUST_EMAIL' => $this->input->post('SH_CUST_EMAIL'),
	    'CUST_ADD1'   => $this->input->post('SH_CUST_ADD1'),
	    'CUST_ADD2' => $this->input->post('SH_CUST_ADD2'),
	    'CUST_MOBILE_NO' => $this->input->post('SH_MOBILE_NO'),
	    'CUST_CT_CODE' => $this->input->post('SH_CT_CODE'),
	    'CUST_AR_CODE' => $this->input->post('SH_AR_CODE'),
	    'CUST_UPD_UID' => $session_data,
	);
	
	$this->db->where("CUST_ID",$CustId);
	$this->db->update('cust_detail',$data);
	$dataCount = count($this->input->post('SL_LINE_NO[]'));
	$product = array();
	for ($i=0; $i<$dataCount-1; $i++)
	{
	    array_push($product, $_POST['SL_PROD_TYPE'][$i]);
	}
	$ProductType = implode ("," , $product);
	$data = array(
	    'SH_CUST_ID' => $this->input->post('SH_CUST_ID'),
	    'SH_CUST_CODE'  => $this->input->post('SH_CUST_CODE'),
	    'SH_CUST_TYPE'  => $this->input->post('SH_CUST_TYPE'),
	    'SH_CUST_NAME'  => $this->input->post('SH_CUST_NAME'),
	    'SH_MOBILE_NO' => $this->input->post('SH_MOBILE_NO'),
	    'SH_AR_CODE'   => $this->input->post('SH_AR_CODE'),
	    'SH_CT_CODE' => $this->input->post('SH_CT_CODE'),
	    'SH_TXN_DT' => $this->input->post('SH_TXN_DT'),
	    'SH_CALL_TYPE' => $this->input->post('SH_CALL_TYPE'),
	    'SH_EMP_ID' => $this->input->post('SH_EMP_ID'),
	    'SH_ESTIMATED_AMT' =>$this->input->post('SH_ESTIMATED_AMT'),
	    'SH_ITEM_STATUS' => $this->input->post('SH_ITEM_STATUS'),
	    'SH_AMT_RECVD' => $this->input->post('SH_AMT_RECVD'),
	    'SH_FEEDBACK' => $this->input->post('SH_FEEDBACK'),
	    'SH_TIME_IN' => $this->input->post('SH_TIME_IN'),
	    'SH_TIME_OUT' => $this->input->post('SH_TIME_OUT'),
	    'SH_EMP_SPEND_TIME' => $this->input->post('SH_EMP_SPEND_TIME'),
	    'SH_COMMIT_DT' => $this->input->post('SH_COMMIT_DT'),
	    'SH_NT_COMMIT_DT' => $this->input->post('SH_NT_COMMIT_DT'),
	    'SH_CUST_APPR_YN' => $this->input->post('SH_CUST_APPR_YN'),
	    'SH_INFORM_CUST_YN' => $this->input->post('SH_INFORM_CUST_YN'),
	    'SH_DELIVERY_YN' => $this->input->post('SH_DELIVERY_YN'),
	    'SH_PRODUCT_TYPE' => $ProductType,
	    'SH_UPD_UID' => $session_data,
	);
	$this->db->where('SH_SYS_ID',$id);
	$this->db->update('service_head',$data);
	$dataCount = count($this->input->post('LINE_TYPE[]'));
	for ($i=0; $i<$dataCount-1; $i++)
	{
	    if($_POST['LINE_TYPE'][$i]=='new'){
		$this->addServiceLines($i,$id);
	    }
	    else if($_POST['LINE_TYPE'][$i]=='edit'){
		$this->EditLines($i);
	    }
	    else{
		$this->DeleteLines($i);
	    }
	}
    }
    
    function EditLines($i){
	
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    'SL_LINE_NO'  => $_POST['SL_LINE_NO'][$i],
	    'SL_PROD_TYPE' => $_POST['SL_PROD_TYPE'][$i],
	    'SL_ISSUE_FROM_CUST	' => $_POST['SL_ISSUE_FROM_CUST'][$i],
	    'SL_FOUND_BY_EMP' =>$_POST['SL_FOUND_BY_EMP'][$i],
	    'SL_ESTIMATED_AMT' => $_POST['SL_ESTIMATED_AMT'][$i],
	    'SL_FEEDBACK' => $_POST['SL_FEEDBACK'][$i],
	    'SL_UPD_UID' => $session_data,
	);
	$this->db->where('SL_SYS_ID',$_POST['SL_SYS_ID'][$i]);
	$this->db->update('service_line',$data);
    }
    
    function getService_Edit($id)
    {
        $sql="SELECT * FROM service_head WHERE SH_SYS_ID = '$id'";
	return  $query = $this->db->query($sql)->result_array();
    }
    
    function getLine_Edit($id)
    {
        $sql="SELECT * FROM service_line WHERE SL_SH_SYS_ID = '$id'";
	return  $query = $this->db->query($sql)->result_array();
    }
    
    function getProduct_Edit()
    {
        $sql="SELECT * FROM product_detail";
	return  $query = $this->db->query($sql)->result_array();
    }
    
    function gettable(){
	$query = $this->db->get('service_head');
        $result= $query->result();
	return $result;
    }
    
    function MoreInfoView($Value)
    {
	$this->db->where("SL_SH_SYS_ID",$Value);
	return $this->db->get("service_line")->result_array();
    }
    
    function MoreInfoHeadView($Value)
    {
	$this->db->where("SH_SYS_ID",$Value);
	return $this->db->get("service_head")->result_array();
    }
    
    public function GetDetails($pet_sysid){                                        
	$sql="SELECT * FROM service_head where SH_SYS_ID='$pet_sysid'";
	return $data = $this->db->query($sql, $return_object = TRUE)->result_array();           
    }
    
    public function Update_Status($pet_sysid,$pet_status){
	if($pet_status=='REQ'){
	    $status_show='PROCESS';
	}else if($pet_status=='PROCESS'){
	    $status_show='COMPLETED';
	}else if($pet_status=='COMPLETED'){
	    $status_show='DELIVERED';
	}else if($pet_status=='DELIVERED'){
	    $status_show='DELIVERED';
	}else if($pet_status=='CANCEL'){
	    $status_show='CANCEL';
	}
	$data = array(
	    'SH_ITEM_STATUS' => $status_show
	);
	$this->db->where('SH_SYS_ID',$pet_sysid);
	$this->db->update('service_head',$data);
    }
    
    function DeleteLines($i){
	$data = array(
	    'SL_LINE_NO'  => $_POST['SL_LINE_NO'][$i],
	    'SL_PROD_TYPE' => $_POST['SL_PROD_TYPE'][$i],
	    'SL_ISSUE_FROM_CUST	' => $_POST['SL_ISSUE_FROM_CUST'][$i],
	    'SL_FOUND_BY_EMP' =>$_POST['SL_FOUND_BY_EMP'][$i],
	    'SL_ESTIMATED_AMT' => $_POST['SL_ESTIMATED_AMT'][$i],
	    'SL_FEEDBACK' => $_POST['SL_FEEDBACK'][$i]
	);
	$this->db->delete('service_line',$data);
    }
    
    function totalcareAdd(){
	$session_data = $this->session->userdata('USER_NAME');
	$Type = $_POST['TCH_CUST_ID'];
	
	if($Type==""){
	    $data = array(
		'CUST_CODE' => $this->input->post('TCH_CUST_CODE'),
		'CUST_NAME' => $this->input->post('TCH_CUST_NAME'),
		'CUST_MOBILE_NO' => $this->input->post('TCH_CUST_MOBILE'),
		'CUST_EMAIL' => $this->input->post('TCH_CUST_EMAIL'),
		'CUST_RESI_TYPE' => $this->input->post('TCH_CUST_RESI_TYPE'),
		'CUST_ADD1' => $this->input->post('TCH_CUST_ADD1'),
		'CUST_ADD2' => $this->input->post('TCH_CUST_ADD2'),
		'CUST_CT_CODE' => $this->input->post('TCH_CUST_CT_CODE'),
		'CUST_AR_CODE' => $this->input->post('TCH_CUST_AR_CODE'),
		'CUST_CR_UID'=>$session_data
	    );
	    $this->db->insert('cust_detail',$data);
	    $CustId=$this->db->insert_id();
	}else{
	    $CustId = $this->input->post('TCH_CUST_ID');
	}
	$data = array(
	    'TCH_CUST_ID'  => $CustId,
	    'TCH_CUST_CODE' => $this->input->post('TCH_CUST_CODE'),
	    'TCH_CUST_NAME' => $this->input->post('TCH_CUST_NAME'),
	    'TCH_CUST_MOBILE' => $this->input->post('TCH_CUST_MOBILE'),
	    'TCH_CUST_EMAIL' => $this->input->post('TCH_CUST_EMAIL'),
	    'TCH_CUST_RESI_TYPE' => $this->input->post('TCH_CUST_RESI_TYPE'),
	    'TCH_CUST_ADD1' => $this->input->post('TCH_CUST_ADD1'),
	    'TCH_CUST_ADD2' => $this->input->post('TCH_CUST_ADD2'),
	    'TCH_CUST_CT_CODE' => $this->input->post('TCH_CUST_CT_CODE'),
	    'TCH_CUST_AR_CODE' => $this->input->post('TCH_CUST_AR_CODE'),
	    'TCH_CR_UID' => $session_data
	);
	$this->db->insert("totalcare_head",$data);
	$query=$this->db->insert_id();   
	$dataCount = count($this->input->post('TCL_LINE_NO[]'));
	for ($i=0; $i<$dataCount-1; $i++)
	{
	    $this->addtotalcareline($i,$query);
        }
	$dataCountPro = count($this->input->post('TCP_LINE_NO[]'));
	for ($i=0; $i<$dataCountPro-1; $i++)
	{
	    $this->addtotalcareproduct($i,$query);
        }
    }
    
    function addtotalcareline($i,$query)
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    'TCL_TCH_SYS_ID'=>$query,
	    'TCL_LINE_NO' => $_POST['TCL_LINE_NO'][$i],
	    'TCL_DATE'  => $_POST['TCL_DATE'][$i],
	    'TCL_CALL_TYPE' => $_POST['TCL_CALL_TYPE'][$i],
	    'TCL_EMP_ID' => $_POST['TCL_EMP_ID'][$i],
	    'TCL_TIME_IN' =>$_POST['TCL_TIME_IN'][$i],
	    'TCL_TIME_OUT' => $_POST['TCL_TIME_OUT'][$i],
	    'TCL_WORK_YN' => $_POST['TCL_WORK_YN'][$i],
	    'TCL_PROBLEM' => $_POST['TCL_PROBLEM'][$i],
	    'TCL_SERVICE_AMOUNT' => $_POST['TCL_SERVICE_AMOUNT'][$i],
	    'TCL_CUST_FEEDBACK' => $_POST['TCL_CUST_FEEDBACK'][$i],
	    'TCL_PART_RPC_YN' => $_POST['TCL_PART_RPC_YN'][$i],
	    'TCL_PART_RPC_AMOUNT' => $_POST['TCL_PART_RPC_AMOUNT'][$i],
	    'TCL_STATUS' => $_POST['TCL_STATUS'][$i],
	    'TCL_CR_UID' => $session_data
	);
	
	$this->db->insert('totalcare_line',$data);
	$LineId=$this->db->insert_id();
    }
    
    function addtotalcareproduct($i,$query)
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    'TCP_TCH_SYS_ID'=>$query,
	    'TCP_TCL_SYS_ID'=>NULL,
	    'TCP_LINE_NO' => $_POST['TCP_LINE_NO'][$i],
	    'TCP_PRODUCT'  => $_POST['TCP_PRODUCT'][$i],
	    'TCP_PROD_CONDITION' => $_POST['TCP_PROD_CONDITION'][$i],
	    'TCP_PROD_SPECIFIC' => $_POST['TCP_PROD_SPECIFIC'][$i],
	    'TCP_CR_UID' => $session_data
	);
	$this->db->insert('totalcare_product',$data);
    }
    
    function gettotalcare(){
	$query = $this->db->get('totalcare_head');
        $result= $query->result();
	return $result;
    }
    
    function gettotalHead_Edit($id)
    {
        $sql="SELECT * FROM totalcare_head WHERE TCH_SYS_ID = '$id'";
        return $query = $this->db->query($sql)->result_array();
    }
    
    function gettotalLine_Edit($id)
    {
        $sql="SELECT * FROM totalcare_line WHERE TCL_TCH_SYS_ID = '$id'";
	return  $query = $this->db->query($sql)->result_array();
    }
    
    function gettotalProduct_Edit($id)
    {
	$sql="SELECT * FROM totalcare_product WHERE TCP_TCH_SYS_ID = '$id'";
	return  $query = $this->db->query($sql)->result_array();
    }
    
    function totalcare_Edit($id){
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    'TCH_CUST_CODE' => $this->input->post('TCH_CUST_CODE'),
	    'TCH_CUST_NAME' => $this->input->post('TCH_CUST_NAME'),
	    'TCH_CUST_MOBILE' => $this->input->post('TCH_CUST_MOBILE'),
	    'TCH_CUST_EMAIL' => $this->input->post('TCH_CUST_EMAIL'),
	    'TCH_CUST_RESI_TYPE' => $this->input->post('TCH_CUST_RESI_TYPE'),
	    'TCH_CUST_ADD1' => $this->input->post('TCH_CUST_ADD1'),
	    'TCH_CUST_ADD2' => $this->input->post('TCH_CUST_ADD2'),
	    'TCH_CUST_CT_CODE' => $this->input->post('TCH_CUST_CT_CODE'),
	    'TCH_CUST_AR_CODE' => $this->input->post('TCH_CUST_AR_CODE'),
	    'TCH_UPD_UID' => $session_data
	);
	$this->db->where('TCH_SYS_ID',$id);
	$this->db->update('totalcare_head',$data);
	$dataCount = count($this->input->post('TCL_LINE_NO[]'));
	for ($i=0; $i<$dataCount-1; $i++)
	{
	    if($_POST['LINE_TYPE'][$i]=='edit'){
		
		$this->EditTotalcareLines($i);
	    }
	    else{
		$this->addtotalcareline($i,$id);
	    }
	}
	$dataCountPro = count($this->input->post('TCP_LINE_NO[]'));
	for ($i=0; $i<$dataCountPro-1; $i++)
	{
	    if($_POST['LINE_TYPE1'][$i]=='edit'){
		$this->Edittotalcareproduct($i);
	    }
	    else{
		$this->addtotalcareproduct($i,$id);
	    }
	}
	if($this->input->post("LineSysId"))
	{
	    
	    $LineId = explode("," , $this->input->post("LineSysId"));
	    for($i=0; $i<count($LineId); $i++)
	    {
		$SysId = $LineId[$i];
		$this->DeleteTotalcareLines($SysId);
	    }
	}
	if($this->input->post("ProLineSysId"))
	{
	    $LineId = explode("," , $this->input->post("ProLineSysId"));
	    for($i=0; $i<count($LineId); $i++)
	    {
		$SysId = $LineId[$i];
		$this->DeleteTotalcareProLines($SysId);
	    }
	}
	
    }
    
    function EditTotalcareLines($i){
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    'TCL_LINE_NO' => $_POST['TCL_LINE_NO'][$i],
	    'TCL_DATE'  => $_POST['TCL_DATE'][$i],
	    'TCL_CALL_TYPE' => $_POST['TCL_CALL_TYPE'][$i],
	    'TCL_EMP_ID' => $_POST['TCL_EMP_ID'][$i],
	    'TCL_TIME_IN' =>$_POST['TCL_TIME_IN'][$i],
	    'TCL_TIME_OUT' => $_POST['TCL_TIME_OUT'][$i],
	    'TCL_WORK_YN' => $_POST['TCL_WORK_YN'][$i],
	    'TCL_PROBLEM' => $_POST['TCL_PROBLEM'][$i],
	    'TCL_SERVICE_AMOUNT' => $_POST['TCL_SERVICE_AMOUNT'][$i],
	    'TCL_CUST_FEEDBACK' => $_POST['TCL_CUST_FEEDBACK'][$i],
	    'TCL_PART_RPC_YN' => $_POST['TCL_PART_RPC_YN'][$i],
	    'TCL_PART_RPC_AMOUNT' => $_POST['TCL_PART_RPC_AMOUNT'][$i],
	    'TCL_STATUS' => $_POST['TCL_STATUS'][$i],
	    'TCL_UPD_UID' => $session_data
	);
	
	$this->db->where('TCL_SYS_ID',$_POST['TCL_SYS_ID'][$i]);
	$this->db->update('totalcare_line',$data);
    }
    
    function Edittotalcareproduct($i)
    {
	$session_data = $this->session->userdata('USER_NAME');
	$data = array(
	    'TCP_LINE_NO' => $_POST['TCP_LINE_NO'][$i],
	    'TCP_PRODUCT'  => $_POST['TCP_PRODUCT'][$i],
	    'TCP_PROD_CONDITION' => $_POST['TCP_PROD_CONDITION'][$i],
	    'TCP_PROD_SPECIFIC' => $_POST['TCP_PROD_SPECIFIC'][$i],
	    'TCP_UPD_UID' => $session_data
	);
	$this->db->where('TCP_SYS_ID',$_POST['TCP_SYS_ID'][$i]);
	$this->db->update('totalcare_product',$data);
    }
    
    function DeleteTotalcareLines($SysId)
    {
	$data = array(
	    'TCL_LINE_NO' => $_POST['TCL_LINE_NO'],
	    'TCL_DATE'  => $_POST['TCL_DATE'],
	    'TCL_CALL_TYPE' => $_POST['TCL_CALL_TYPE'],
	    'TCL_EMP_ID' => $_POST['TCL_EMP_ID'],
	    'TCL_TIME_IN' =>$_POST['TCL_TIME_IN'],
	    'TCL_TIME_OUT' => $_POST['TCL_TIME_OUT'],
	    'TCL_WORK_YN' => $_POST['TCL_WORK_YN'],
	    'TCL_PROBLEM' => $_POST['TCL_PROBLEM'],
	    'TCL_SERVICE_AMOUNT' => $_POST['TCL_SERVICE_AMOUNT'],
	    'TCL_CUST_FEEDBACK' => $_POST['TCL_CUST_FEEDBACK'],
	    'TCL_PART_RPC_YN' => $_POST['TCL_PART_RPC_YN'],
	    'TCL_PART_RPC_AMOUNT' => $_POST['TCL_PART_RPC_AMOUNT'],
	    'TCL_STATUS' => $_POST['TCL_STATUS'],
	);
	$this->db->where("TCL_SYS_ID",$SysId);
	$this->db->delete('totalcare_line');
    }
    
    function DeleteTotalcareProLines($SysId)
    {
	$data = array(
	    'TCP_LINE_NO' => $_POST['TCP_LINE_NO'],
	    'TCP_PRODUCT'  => $_POST['TCP_PRODUCT'],
	    'TCP_PROD_CONDITION' => $_POST['TCP_PROD_CONDITION'],
	    'TCP_PROD_SPECIFIC' => $_POST['TCP_PROD_SPECIFIC'],
	);
	$this->db->where("TCP_SYS_ID",$SysId);
	$this->db->delete('totalcare_product');
    }
    
    function GetCustDetails($CustId)
    {
	$this->db->where('CUST_ID',$CustId);
	return $this->db->get('cust_detail')->result_array();
    }
    
    function GetCustCodeDetails($CustId)
    {
	$this->db->where('CUST_CODE',$CustId);
	return $this->db->get('cust_detail')->result_array();
    }
    
    function GetCustNum($CustId)
    {
	$this->db->where('CUST_MOBILE_NO',$CustId);
	return $this->db->get('cust_detail')->result_array();
    }
    function CustomerData()
    {
	$result = $this->db->get("cust_detail");
	return $result->num_rows();
    }
	    
    function SupplierData()
    {
	$result = $this->db->get("supplier_detail");
	return $result->num_rows();
    }
	   
    function EmpData()
    {
	$result = $this->db->get("emp_detail");
	return $result->num_rows();
    }
	   
    function ProductData()
    {
	$result = $this->db->get("product_detail");
	return $result->num_rows();
    }
	   
    function InboundService()
    {
	$this->db->where('SH_CALL_TYPE','Inbound');
	$result = $this->db->get("service_head");
	return $result->num_rows();
    }
	   
    function OnsiteService()
    {
	$this->db->where('SH_CALL_TYPE','Onsite');
	$result = $this->db->get("service_head");
	return $result->num_rows();
    }
	   
    function InboundReq()
    {
	$this->db->where("SH_CALL_TYPE='Inbound' AND SH_ITEM_STATUS ='REQ'");
	$result = $this->db->get("service_head");
	return $result->num_rows();
    }
    
    function OnsiteReq()
    {
	$this->db->where("SH_CALL_TYPE='Onsite' AND SH_ITEM_STATUS ='REQ'");
	$result = $this->db->get("service_head");
	return $result->num_rows();
    }
    
    function InboundProcess()
    {
	$this->db->where("SH_CALL_TYPE='Inbound' AND SH_ITEM_STATUS ='PROCESS'");
	$result = $this->db->get("service_head");
	return $result->num_rows();
    }
    
    function OnsiteProcess()
    {
	$this->db->where("SH_CALL_TYPE='Onsite' AND SH_ITEM_STATUS ='PROCESS'");
	$result = $this->db->get("service_head");
	return $result->num_rows();
    }
    
    function InboundComp()
    {
	$this->db->where("SH_CALL_TYPE='Inbound' AND SH_ITEM_STATUS ='COMPLETED'");
	$result = $this->db->get("service_head");
	return $result->num_rows();
    }
    
    function OnsiteComp()
    {
	$this->db->where("SH_CALL_TYPE='Onsite' AND SH_ITEM_STATUS ='COMPLETED'");
	$result = $this->db->get("service_head");
	return $result->num_rows();
    }
    
    function InboundDel()
    {
	$this->db->where("SH_CALL_TYPE='Inbound' AND SH_ITEM_STATUS ='DELIVERED'");
	$result = $this->db->get("service_head");
	return $result->num_rows();
    }
    
    function OnsiteDel()
    {
	$this->db->where("SH_CALL_TYPE='Onsite' AND SH_ITEM_STATUS ='DELIVERED'");
	$result = $this->db->get("service_head");
	return $result->num_rows();
    }
    
    function GetNotification($nextDay)
    {
	$this->db->where('TCL_DATE',$nextDay);
	return $this->db->get('totalcare_line')->result_array();
    }
    
    function AjaxCustCode($CustCode)
    {
	$this->db->where('CUST_CODE',$CustCode);
	$result = $this->db->get('cust_detail')->result_array();
	return count($result);
    }
    
    function GetCalls()
    {
	$data = array(
	    'SH_CALL_TYPE' => $_POST['values'],
	    'SH_SYS_ID' => $_POST['val']
	);
	$this->db->where('SH_SYS_ID',$_POST['val']);
	$this->db->update('service_head',$data);
    }
    
}
