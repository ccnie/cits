<?php
 
 class Blog extends CI_Controller {
 	
 	function Blog()
 	{
 		parent::__construct();
 		
 		$this->load->helper('url');
 		$this->load->helper('form');
 	}
 	
 	function	index()
 	{
 		$data['title'] = "bugss coded by zhouxin on codeigniter";
 		$data['heading'] = "故障备忘录  by 周鑫";
 		$data['zhouxin'] = array('zhouqihong', 'zhangshangting', 'zhouxin');
 		$this->load->database();
 		$data['query'] = $this->db->get('entries');
 		
 		$this->load->view('blog_view',$data);
 	}
 	
 	 function blog_insert()
 	{
 		$this->load->database();
 		$_POST['body'] = nl2br($_POST['body']); 
 		$this->db->insert('entries', $_POST);
 		
 		redirect('blog');
 	}
 	
 	 function blog_modify()
 	{
 		$this->load->database();
 		
 		$data['title'] = "bugss coded by zhouxin on codeigniter";
 		$data['heading'] = "修改故障";
 		$this->db->where('id',$this->uri->segment(3));
 		$data['query'] =$this->db->get('entries');
 		
 		$this->load->view('blog_update_view',$data);
 	}
 	
 	 function blog_manage()
 	{
 		$this->load->database();
 		
 		$data['title'] = "bugss coded by zhouxin on codeigniter";
 		$data['heading'] = "故障管理";
 		//$this->db->where('id',$this->uri->segment(3));
 		$data['query'] =$this->db->get('entries');
 		
 		$this->load->view('blog_manage_view',$data);
 	}
 	
 	 function blog_update()
 	{
 		$this->load->database();
 		$this->db->where('id',$_POST['id']);
 		$_POST['body'] = nl2br($_POST['body']); 
 		$this->db->update('entries', $_POST);
 		
 		redirect('blog');
 	}
 	
 	 function blog_delete()
 	{
 		$this->load->database();
 		$this->db->where('id',$this->uri->segment(3));
 		$this->db->delete('entries');
 		
 		redirect('blog');
 	}
 	
 	function comments()
 	{
 		$this->load->database();
 		
 		$data['title'] = "Comment Title";
 		$data['heading'] = "Comment Heading";
 		$this->db->where('entry_id',$this->uri->segment(3));
 		$data['query'] =$this->db->get('comments');
 		
 		$this->load->view('comment_view',$data);
 	}
 	
 	function comment_insert()
 	{
 		$this->load->database();
 		$_POST['body'] = nl2br($_POST['body']); 
 		$this->db->insert('comments', $_POST);
 		
 		redirect('blog/comments/'.$_POST['entry_id']);
 	}
 	

 }
?>
