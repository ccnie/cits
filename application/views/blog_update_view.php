 <html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title><?=$title?></title>
 </head>
 
 <body>
 <h1><?=$heading?></h1>
 
 <?php if ($query->num_rows() > 0):?>
	  <?php foreach($query->result() as $row):?>
	 <?php endforeach;?>
<?php endif; ?>
 
 <?=anchor('blog', 'Back to Home');?>
 

 
 <?=form_open('blog/blog_update');?>

<?=form_hidden('id', $this->uri->segment(3));?>
<table>
<tr>
<th  style="width:150px">故障 EC ID:</th>
<td><input  style="width:650px" type="text" name="ec_id"  value = <?=$row->ec_id?> /></td>
</tr>
<tr>
<th style="width:150px">故障标题描述:</th>
<td><input  style="width:650px" type="text" name="title" value = <?=$row->title?> /></td>
</tr>
<tr>
<th style="width:150px">故障所属项目:</th>
<td><input  style="width:650px" type="text" name="project" value = <?=$row->project?>  /></td>
</tr>
<tr>
<th style="width:150px">故障处理状态:</th>
<td><input  style="width:650px" type="text" name="state" value = <?=$row->state?> /></p>
</tr>
<tr>
<th style="width:150px">故障分析结果:</th>
<td><textarea style="width:650px" name="body" rows="10" ><?=$row->body?> </textarea></td>
</tr>
<table>
<p><input type="submit" value="更新一个故障" /></p>
 
 </form>
 
 </body>
 </html>
