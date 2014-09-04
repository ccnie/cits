 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title><?=$title?></title>
 <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"
        type="text/css" media="all">
 </head>
 
 <body>
 <h1><?=$heading?></h1>
 <p align = right >
 <?php echo anchor('blog/blog_manage/', '故障管理');?>
 </p>
 <?php foreach($query->result() as $row): ?>

	<table>
	<tr>
	<th  style="width:150px">故障 EC ID:</th>
	<td><?=$row->ec_id?></td>
	</tr>
	<tr>
	<th style="width:150px">故障标题描述:</th>
	<td><?=$row->title?></td>
	</tr>
	<tr>
	<th style="width:150px">故障所属项目:</th>
	<td><?=$row->project?></td>
	</tr>
	<tr>
	<th style="width:150px">故障处理状态:</th>
	<td><?=$row->state?></p>
	</tr>
	<tr>
	<th style="width:150px">故障分析结果:</th>
	<td><?=$row->body?> </td>
	</tr>
	<table>
	
  <?php echo anchor('blog/blog_modify/'.$row->id, '更新故障!!!');?>
  <hr>
 <?php endforeach; ?>


<?=form_open('blog/blog_insert');?>

<form>
<table>
<tr>
<th  style="width:150px">故障 EC ID:</th>
<td><input  style="width:650px" type="text" name="ec_id"   /></td>
</tr>
<tr>
<th style="width:150px">故障标题描述:</th>
<td><input  style="width:650px" type="text" name="title" /></td>
</tr>
<tr>
<th style="width:150px">故障所属项目:</th>
<td><input  style="width:650px" type="text" name="project"   /></td>
</tr>
<tr>
<th style="width:150px">故障处理状态:</th>
<td><input  style="width:650px" type="text" name="state"  /></p>
</tr>
<tr>
<th style="width:150px">故障分析结果:</th>
<td><textarea style="width:650px" name="body" rows="10" > </textarea></td>
</tr>
<table>
<p><input type="submit" value="提交一个新故障" /></p>

 </form>
 </body>
 </html>
