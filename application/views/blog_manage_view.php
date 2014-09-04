 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title><?=$title?></title>
 </head>
 
 <body>
 <h1><?=$heading?></h1>
 
  <?=anchor('blog', 'Back to Home');?>
 
 <?php foreach($query->result() as $row): ?>
<?=form_hidden('id', $this->uri->segment(3));?>
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
	<table>
</form>
  <?php echo anchor('blog/blog_delete/'.$row->id, '删除故障!!!');?>
  <hr>
 <?php endforeach; ?>

 </body>
 </html>
