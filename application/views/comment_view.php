 <html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title><?=$title?></title>
 </head>
 
 <body>
 <h1><?=$heading?></h1>
 
 <?php if ($query->num_rows() > 0):?>
	  <?php foreach($query->result() as $row):?>
	   <p><?=$row->body?></p>
	   <p><?=$row->author?></p>
	
	 <?php endforeach;?>
<?php endif; ?>
 
 <?=anchor('blog', 'Back to blog');?>
 
<?=form_open('blog/comment_insert');?>

<?=form_hidden('entry_id', $this->uri->segment(3));?>

<p><textarea name="body" rows="10"></textarea></p>
<p><input type="text" name="author" /></p>
<p><input type="submit" value="Submit Comment" /></p>
 
 </form>
 
 </body>
 </html>
