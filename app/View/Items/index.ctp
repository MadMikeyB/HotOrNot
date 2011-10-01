<h2>All Items</h2>
<h3><?php echo $this->Html->link('Add Item', array('controller' => 'items', 'action' => 'add')); ?></h3>
<b><a onclick="showAllImg()" style="cursor:pointer;">Show All Images</a></b>
<p style="clear: both;"></p>
<script src="http://code.jquery.com/jquery.js"></script>
<script>
function showAllImg() {
     $('.img').removeClass('hide'); 
}</script>
<style>
.hide {
    display:none;
}
</style>
<?php if (!empty($items)): ?>
<?php foreach ($items as $item): ?>
<script>
    function toggleImg<?php echo $item['Item']['id'] ?>() {
        $('#image<?php echo $item['Item']['id'] ?>').toggleClass('hide'); 
    }
</script>
<b>Title</b>: <?php echo $item['Item']['title'] ?><br />
<b>Description</b>: <?php echo $item['Item']['description'] ?><br />
<b>Tags</b>: <?php echo $item['Item']['tags'] ?><br />
<b>Image:</b> <a id="toggleImg<?php echo $item['Item']['id'] ?>" onclick="toggleImg<?php echo $item['Item']['id'] ?>()" style="cursor:pointer;">Show Image</a>
<img src="<?php echo $item['Item']['image'] ?>" style="width:40%; float:right;" class="hide img" id="image<?php echo $item['Item']['id'] ?>" />
<p style="clear: both;"></p>
<?php endforeach; ?>
<?php else: ?>
<br />
<em>No Items Added.</em>
<?php endif; ?>