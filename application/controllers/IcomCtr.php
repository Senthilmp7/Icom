<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IcomCtr extends CI_Controller {

    function IcomCtr()
    {
	parent::__construct();
	$this->load->model('IcomModel');
	$this->load->library('session');
	$this->load->library('Datatables');
	$this->load->library('table');
	$this->load->helper('datatables_helper');
	error_reporting(0);
    }
    public function index()
    {
	$session_data = $this->session->userdata('USER_NAME');
	
	if ($this->input->post('proceed')=='yes')
	{	
	    $result= $this->IcomModel->IcomAuthentication();
	     
	    if($result == NULL)
	    {
		$error=$this->session->set_flashdata('error', 'Invalid User Id and Password Please check it');
		redirect(base_url()."IcomCtr",'refresh');
	    }
	    else
	    {
		$this->session->set_userdata('USER_NAME',$result[0]['USER_NAME']);
		redirect("IcomCtr/Dashboard");
	    }
	}
	$this->load->view('index');
	if(isset($session_data) && $session_data != "")
	{
	    redirect("IcomCtr/User_View");
	}
    }
    
    function Dashboard()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->load->view('header');
	    $result["customer"] = $this->IcomModel->CustomerData();
	    $result["employee"] = $this->IcomModel->EmpData();
	    $result["supplier"] = $this->IcomModel->SupplierData(); 
	    $result["product"] = $this->IcomModel->ProductData();
	    $result["inbound"] = $this->IcomModel->InboundService();
	    $result["onsite"] = $this->IcomModel->OnsiteService();
	    $result["InboundReq"]= $this->IcomModel->InboundReq();
	    $result["OnsiteReq"]= $this->IcomModel->OnsiteReq();
	    $result["InboundProcess"]= $this->IcomModel->InboundProcess();
	    $result["OnsiteProcess"]= $this->IcomModel->OnsiteProcess();
	    $result["InboundComp"]= $this->IcomModel->InboundComp();
	    $result["OnsiteComp"]= $this->IcomModel->OnsiteComp();
	    $result["InboundDel"]= $this->IcomModel->InboundDel();
	    $result["OnsiteDel"]= $this->IcomModel->OnsiteDel();
	    $this->load->view('Dashboard',$result);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }

     public function Logout()
    {
	$this->session->unset_userdata('USER_NAME');
	unset($this->session->userdata);
	redirect(base_url()."IcomCtr",'refresh');
    }
    
    function User_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->IcomModel->User_Add();
		redirect("IcomCtr/User_View");
	    }
	    $this ->load->view('header');
	    $this->load->view('User_Add');
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function User_View()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $data['User']=$this->IcomModel->GetUser();
	    $this->load->view('header');
	    $this->load->view('User_View',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function User_Edit($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Update')
	    {
		$this->IcomModel->UpdateUser($id);
		redirect("IcomCtr/User_View");
	    }
	    $data['User']=$this->IcomModel->GetEditUser($id);
	    $this->load->view('header');
	    $this->load->view('User_Edit',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function User_Delete($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->db->where("USER_ID",$id);
	    $this->db->delete("user");
	    redirect("IcomCtr/User_View");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function UserCheck()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $id = $this->input->post('UserName');
	    $userCheck = $this->IcomModel->UserCheck($id);
	    if($userCheck > 0){
		echo json_encode(array('valid'=>'false'));
	    }else{
		echo json_encode(array('valid'=>'true'));
	    }
	}else{
	    redirect(site_url('IcomCtr'));
	}
	
    }
    
    function Country_View()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	$data['Country']=$this->IcomModel->GetCountry();
	$this->load->view('header');
	$this->load->view('Country_View',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Country_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->IcomModel->Country_Add();
		redirect("IcomCtr/Country_View");
	    }
	    $this ->load->view('header');
	    $this->load->view('Country_Add');
	}
	else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Country_Edit($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Update')
	    {
		$this->IcomModel->UpdateCountry($id);
		redirect("IcomCtr/Country_View");
	    }
	    $data['Country']=$this->IcomModel->GetEditCountry($id);
	    $this->load->view('header');
	    $this->load->view('Country_Edit',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Country_Delete($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->db->where("CN_CODE",$id);
	    $this->db->delete("country");
	    redirect("IcomCtr/Country_View");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function State_View()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	$data['State']=$this->IcomModel->GetState();
	$this->load->view('header');
	$this->load->view('State_View',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function State_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->IcomModel->State_Add();
		redirect("IcomCtr/State_View");
	    }
	    $data['Country']=$this->IcomModel->GetCountry();
	    $this ->load->view('header');
	    $this->load->view('State_Add',$data);
	}
	else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function State_Edit($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Update')
	    {
		$this->IcomModel->UpdateState($id);
		redirect("IcomCtr/State_View");
	    }
	    $data['State']=$this->IcomModel->GetEditState($id);
	    $data['Country']=$this->IcomModel->GetCountry();
	    $this->load->view('header');
	    $this->load->view('State_Edit',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function State_Delete($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->db->where("ST_CODE",$id);
	    $this->db->delete("state");
	    redirect("IcomCtr/State_View");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function City_View()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if($session_data)
	{
	$data['City']=$this->IcomModel->GetCity();
	$this->load->view('header');
	$this->load->view('City_View',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function generateCity()
    {
	$this->datatables->select('CITY_CODE,CITY_DESC,CITY_ACTIVE_YN,CITY_CR_UID,CITY_CR_DT,CITY_UPD_UID,CITY_UPD_DT')
        ->from('city');
	echo $this->datatables->generate();
    }
    
    function City_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->IcomModel->City_Add();
		redirect("IcomCtr/City_View");
	    }
	    $data['Country']=$this->IcomModel->GetCountry();
	    $this ->load->view('header');
	    $this->load->view('City_Add',$data);
	}
	else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function City_Edit($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Update')
	    {
		$this->IcomModel->UpdateCity($id);
		redirect("IcomCtr/City_View");
	    }
	    $data['City']=$this->IcomModel->GetEditCity($id);
	    $this->load->view('header');
	    $this->load->view('City_Edit',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function City_Delete($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->db->where("CITY_CODE",$id);
	    $this->db->delete("city");
	    redirect("IcomCtr/City_View");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Area_View()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	$data['Area']=$this->IcomModel->GetArea();
	$this->load->view('header');
	$this->load->view('Area_View',$data);
	}
	else{
	    redirect(site_url('IcomCtr'));
	}
    }
    function Area_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->IcomModel->Area_Add();
		redirect("IcomCtr/Area_View");
	    }
	    $data['City']=$this->IcomModel->GetCityCode();
	    $this ->load->view('header');
	    $this->load->view('Area_Add',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Area_Edit($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Update')
	    {
		$this->IcomModel->UpdateArea($id);
		redirect("IcomCtr/Area_View");
	    }
	    $data['Area']=$this->IcomModel->GetEditArea($id);
	    $data['City']=$this->IcomModel->GetCityCode();
	    $this->load->view('header');
	    $this->load->view('Area_Edit',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Area_Delete($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->db->where("AR_CODE",$id);
	    $this->db->delete("area");
	    redirect("IcomCtr/Area_View");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Product_View()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	$data['Product']=$this->IcomModel->GetProduct();
	$this->load->view('header');
	$this->load->view('Product_View',$data);
	}
	else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Product_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->IcomModel->Product_Add();
		redirect("IcomCtr/Product_View");
	    }
	    $this ->load->view('header');
	    $this->load->view('Product_Add');
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Product_Edit($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Update')
	    {
		$this->IcomModel->UpdateProduct($id);
		redirect("IcomCtr/Product_View");
	    }
	    $data['Product']=$this->IcomModel->GetEditProduct($id);
	    $this->load->view('header');
	    $this->load->view('Product_Edit',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Product_Delete($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->db->where("PR_ID",$id);
	    $this->db->delete("product_detail");
	    redirect("IcomCtr/Product_View");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Customer_View()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	$data['Customer']=$this->IcomModel->GetCustomer();
	$this->load->view('header');
	$this->load->view('Customer_View',$data);
	}
	else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Customer_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->IcomModel->Customer_Add();
		redirect("IcomCtr/Customer_View");
	    }
	    $data['City']=$this->IcomModel->GetCityCode();
	    $this ->load->view('header');
	    $this->load->view('Customer_Add',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Customer_Edit($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Update')
	    {
		$this->IcomModel->UpdateCustomer($id);
		redirect("IcomCtr/Customer_View");
	    }
	    $data['Customer']=$this->IcomModel->GetEditCustomer($id);
	    $val = $data['Customer'][0]['CUST_AR_CODE'];
	    $data['City']=$this->IcomModel->GetCityCode();
	    $data['Area']=$this->IcomModel->GetEditArea($val);
	    $this->load->view('header');
	    $this->load->view('Customer_Edit',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Customer_Delete($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->db->where("CUST_ID",$id);
	    $this->db->delete("cust_detail");
	    redirect("IcomCtr/Customer_View");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function AjaxGetArea()
    {
	$CityValue = $_POST['Citycode'];
	$Type = $_POST['type'];
	$Area = $_POST['area'];
	$data=$this->IcomModel->AjaxGetArea($CityValue);
	?>
	    <option selected="" disabled="">Select</option>
	    <?php
	    foreach ($data as $row)
	    {?>
	    <?php if($Type=="Exist") {?>
	    <option value="<?php echo $row['AR_CODE'];?>" <?php if($row['AR_CODE']==$Area) echo "selected"; ?>><?php echo $row['AR_DESC']; ?></option>
	    <?php } else {?>
	    <option value="<?php echo $row['AR_CODE'];?>"><?php echo $row['AR_DESC']; ?></option>
	    <?php } }?>
	<?php
    }
    
    function AjaxEditGetArea()
    {
	$CityValue = $_POST['Citycode'];
	$data=$this->IcomModel->AjaxGetArea($CityValue);
	?>
	    <option selected="" disabled="">Select</option>
	    <?php
	    foreach ($data as $row)
	    {?>
	    <option value="<?php echo $row['AR_CODE'];?>"><?php echo $row['AR_DESC']; ?></option>
	    <?php } ?>
	<?php
    }
    
    function Supplier_View()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	$data['Supplier']=$this->IcomModel->GetSupplier();
	$this->load->view('header');
	$this->load->view('Supplier_View',$data);
	}
	else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Supplier_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->IcomModel->Supplier_Add();
		redirect("IcomCtr/Supplier_View");
	    }
	    $data['City']=$this->IcomModel->GetCityCode();
	    $this ->load->view('header');
	    $this->load->view('Supplier_Add',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Supplier_Edit($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Update')
	    {
		$this->IcomModel->UpdateSupplier($id);
		redirect("IcomCtr/Supplier_View");
	    }
	    $data['Supplier']=$this->IcomModel->GetEditSupplier($id);
	    $val = $data['Supplier'][0]['SUPL_AR_CODE'];
	    $data['City']=$this->IcomModel->GetCityCode();
	    $data['Area']=$this->IcomModel->GetEditArea($val);
	    $this->load->view('header');
	    $this->load->view('Supplier_Edit',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Supplier_Delete($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->db->where("SUPL_ID",$id);
	    $this->db->delete("supplier_detail");
	    redirect("IcomCtr/Supplier_View");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Emp_View()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	$data['Emp']=$this->IcomModel->GetEmp();
	$this->load->view('header');
	$this->load->view('Emp_View',$data);
	}
	else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Emp_Add()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->IcomModel->Emp_Add();
		redirect("IcomCtr/Emp_View");
	    }
	    $data['City']=$this->IcomModel->GetCityCode();
	    $this ->load->view('header');
	    $this->load->view('Emp_Add',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Emp_Edit($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('submit_form')=='Update')
	    {
		$this->IcomModel->UpdateEmp($id);
		redirect("IcomCtr/Emp_View");
	    }
	    $data['Emp']=$this->IcomModel->GetEditEmp($id);
	    $val = $data['Emp'][0]['EMP_AR_CODE'];
	    $data['City']=$this->IcomModel->GetCityCode();
	    $data['Area']=$this->IcomModel->GetEditArea($val);
	    $this->load->view('header');
	    $this->load->view('Emp_Edit',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Emp_Delete($id)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->db->where("EMP_ID",$id);
	    $this->db->delete("emp_detail");
	    redirect("IcomCtr/Emp_View");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    public function totalcare(){
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $data['City']=$this->IcomModel->GetCityCode();
	    $data['Employee']=$this->IcomModel->GetEmpName();
	    $data['Product']=$this->IcomModel->GetProduct();
	    $this ->load->view('header');
	    $this ->load->view('totalcare_add',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    public function total()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this ->load->view('header');
	    $this->load->view('totalcare_view');
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    public function totalcare_add(){
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this ->load->view('header');
	    $this ->load->view('totalcare_add');
	    $this->IcomModel->totalcareAdd();
	    redirect("IcomCtr/total");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    public function totalcare_Delete($ID)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->db->where("TCH_SYS_ID",$ID);
	    $this->db->delete('totalcare_head');
	    $this->db->where("TCL_TCH_SYS_ID",$ID);
	    $this->db->delete('totalcare_line');
	    $this->db->where("TCP_TCH_SYS_ID",$ID);
	    $this->db->delete('totalcare_product');
	    redirect("IcomCtr/total");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    public function total_Edit($id){
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $data["totalHeadEdit"] = $this->IcomModel->gettotalHead_Edit($id);
	    $val = $data['totalHeadEdit'][0]['TCH_CUST_AR_CODE'];
	    $data['City']=$this->IcomModel->GetCityCode();
	    $data['Area']=$this->IcomModel->GetEditArea($val);
	    $data["totalLineEdit"] = $this->IcomModel->gettotalLine_Edit($id);
	    $data["totalProductEdit"] = $this->IcomModel->gettotalProduct_Edit($id);
	    $data['Employee']=$this->IcomModel->GetEmpName();
	    $data['Product']=$this->IcomModel->GetProduct();
	    $this ->load->view('header');
	    $this ->load->view('totalcare_edit',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    public function totalcare_Edit($id){
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->IcomModel->totalcare_Edit($id);
	    redirect("IcomCtr/total");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    public function serviceCall()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $data['Image']=$this->IcomModel->getProduct_Edit();
	    $this ->load->view('header');
	    $this->load->view('serviceView',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    public function Onsite_View()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $data['Image']=$this->IcomModel->getProduct_Edit();
	    $this ->load->view('header');
	    $this->load->view('Onsite_View',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    public function Service_Edit($mode,$id){
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('proceed')=="add"){
		$this->IcomModel->serviceHeadAdd();
		redirect("IcomCtr/serviceCall");
	    }else if($this->input->post('proceed')=="update"){
		$this->IcomModel->Service_Edit($id);
		redirect("IcomCtr/serviceCall");
	    }
	    $data['mode'] = $mode;
	    if($mode=="add"){
		$data['City']=$this->IcomModel->GetCityCode();
		$data['Employee']=$this->IcomModel->GetEmpName();
		$data["Product"] = $this->IcomModel->getProduct_Edit();
	    }else{
		$this->load->model('IcomModel');
		$data["ServiceEdit"] = $this->IcomModel->getService_Edit($id);
		$val = $data['ServiceEdit'][0]['SH_AR_CODE'];
		$data["LineEdit"] = $this->IcomModel->getLine_Edit($id);
		$data["Product"] = $this->IcomModel->getProduct_Edit();
		$data['City']=$this->IcomModel->GetCityCode();
		$data['Employee']=$this->IcomModel->GetEmpName();
		$data['Area']=$this->IcomModel->GetEditArea($val);
		$CustId = $data['ServiceEdit'][0]['SH_CUST_ID'];
		$data['Customer']=$this->IcomModel->GetCustDetails($CustId);
	    }
	    $this ->load->view('header');
	    $this ->load->view('service',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    public function Onsite_Edit($mode,$id){
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    if($this->input->post('proceed')=="add"){
		$this->IcomModel->serviceHeadAdd();
		redirect("IcomCtr/Onsite_view");
	    }else if($this->input->post('proceed')=="update"){
		$this->IcomModel->Service_Edit($id);
		redirect("IcomCtr/Onsite_view");
	    }
	    $data['mode'] = $mode;
	    if($mode=="add"){
		$data['City']=$this->IcomModel->GetCityCode();
		$data['Employee']=$this->IcomModel->GetEmpName();
		$data["Product"] = $this->IcomModel->getProduct_Edit();
	    }else{
		$this->load->model('IcomModel');
		$data["ServiceEdit"] = $this->IcomModel->getService_Edit($id);
		$val = $data['ServiceEdit'][0]['SH_AR_CODE'];
		$data["LineEdit"] = $this->IcomModel->getLine_Edit($id);
		$data["Product"] = $this->IcomModel->getProduct_Edit();
		$data['City']=$this->IcomModel->GetCityCode();
		$data['Employee']=$this->IcomModel->GetEmpName();
		$data['Area']=$this->IcomModel->GetEditArea($val);
		$CustId = $data['ServiceEdit'][0]['SH_CUST_ID'];
		$data['Customer']=$this->IcomModel->GetCustDetails($CustId);
	    }
	    $this ->load->view('header');
	    $this ->load->view('Onsite',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }

    public function Service_Delete($ID)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->db->where("SH_SYS_ID",$ID);
	    $this->db->delete('service_head');
	    $this->db->where("SL_SH_SYS_ID",$ID);
	    $this->db->delete('service_line');
	    redirect("IcomCtr/serviceCall");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    public function Onsite_Delete($ID)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $this->db->where("SH_SYS_ID",$ID);
	    $this->db->delete('service_head');
	    $this->db->where("SL_SH_SYS_ID",$ID);
	    $this->db->delete('service_line');
	    redirect("IcomCtr/Onsite_View");
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function generateService()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $product= $this->input->post('product_name');
	    if($product!=""){
		$where = "SH_CALL_TYPE='Inbound' AND SH_PRODUCT_TYPE LIKE '%".$product."%'";   
	    }else{
		$where = "SH_CALL_TYPE='Inbound'";    
	    }
	    $this->datatables->select('SH_SYS_ID,SH_TXN_NO,SH_TXN_DT,SH_CALL_TYPE,SH_CUST_ID,SH_CUST_NAME,SH_MOBILE_NO,SH_AR_CODE,SH_CT_CODE,SH_EMP_ID,SH_ESTIMATED_AMT,SH_CUST_APPR_YN,SH_COMMIT_DT,SH_NT_COMMIT_DT,SH_ITEM_STATUS,SH_INFORM_CUST_YN,SH_DELIVERY_YN,SH_AMT_RECVD,SH_FEEDBACK,SH_TIME_IN,SH_TIME_OUT,SH_EMP_SPEND_TIME,SH_CR_DT,SH_CR_UID,SH_UPD_DT,SH_UPD_UID,SH_CUST_TYPE,SH_PRODUCT_TYPE')
	    ->from('service_head')
	    ->where($where);
	    echo $this->datatables->generate();
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function generateOnsite()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $product= $this->input->post('product_name');
	    if($product!=""){
		$where = "SH_CALL_TYPE='Onsite' AND SH_PRODUCT_TYPE LIKE '%".$product."%'";   
	    }else{
		$where = "SH_CALL_TYPE='Onsite'";    
	    }
	    $this->datatables->select('SH_SYS_ID,SH_TXN_NO,SH_TXN_DT,SH_CALL_TYPE,SH_CUST_ID,SH_CUST_NAME,SH_MOBILE_NO,SH_AR_CODE,SH_CT_CODE,SH_EMP_ID,SH_ESTIMATED_AMT,SH_CUST_APPR_YN,SH_COMMIT_DT,SH_NT_COMMIT_DT,SH_ITEM_STATUS,SH_INFORM_CUST_YN,SH_DELIVERY_YN,SH_AMT_RECVD,SH_FEEDBACK,SH_TIME_IN,SH_TIME_OUT,SH_EMP_SPEND_TIME,SH_CR_DT,SH_CR_UID,SH_UPD_DT,SH_UPD_UID,SH_CUST_TYPE,SH_PRODUCT_TYPE')
	    ->from('service_head')
	    ->where($where);
	    echo $this->datatables->generate();
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function MoreInfoView()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $Value = $_POST['valu'];
	    $data['HeadDetails'] = $this->IcomModel->MoreInfoHeadView($Value);
	    $CustId = $data['HeadDetails'][0]['SH_CUST_ID'];
	    $data['Customer']=$this->IcomModel->GetCustDetails($CustId);
	    $data['Details'] = $this->IcomModel->MoreInfoView($Value);
	    $this->load->view('MoreInfo_View',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function MoreInfoOnsiteView()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{
	    $Value = $_POST['valu'];
	    $data['HeadDetails'] = $this->IcomModel->MoreInfoHeadView($Value);
	    $CustId = $data['HeadDetails'][0]['SH_CUST_ID'];
	    $data['Customer']=$this->IcomModel->GetCustDetails($CustId);
	    $data['Details'] = $this->IcomModel->MoreInfoView($Value);
	    $this->load->view('MoreInfoOnsite_View',$data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function GetDetails_Fancy()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{ 
	    header('Content-Type: application/json');
	    $pet_sysid=$_POST['pet_sysid'];
	    $result=$this->IcomModel->GetDetails($pet_sysid);
	    echo '{"pet_status":"'.$result[0]['SH_ITEM_STATUS'].'","pet_sys_id":"'.$result[0]['SH_SYS_ID'].'"}';
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function Fancy_update($pet_sysid)
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{ 
	    header('Content-Type: application/json');
	    $pet_status=$_POST['pet_status'];
	    $result=$this->IcomModel->Update_Status($pet_sysid,$pet_status);
	    echo json_encode($result);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }  
    
    function GetCustDetails()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{ 
	    $CustId = $_POST['Code'];
	    $data = $this->IcomModel->GetCustCodeDetails($CustId);
	    
	    echo json_encode($data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function GetCustNum()
    {
	$session_data = $this->session->userdata('USER_NAME');
	if(!empty($session_data))
	{ 
	    $CustId = $_POST['CustId'];
	    $data = $this->IcomModel->GetCustNum($CustId);
	    echo json_encode($data);
	}else{
	    redirect(site_url('IcomCtr'));
	}
    }
    
    function AjaxCustCode()
    {
	$CustCode = $_POST['CUST_CODE'];
	$ViewDetail = $this->IcomModel->AjaxCustCode($CustCode);
	if($ViewDetail > 0){
	    echo json_encode(array('valid'=>'false'));
	}else{
	    echo json_encode(array('valid'=>'true'));
	}
    }
    
    function CallChange()
    {
	$this->IcomModel->GetCalls();
    }
    
}
