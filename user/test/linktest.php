<form id="delform" method="post" action="delete.php" onsubmit="if( confirm('Do you really want to delete?')) {this.submit();}">
<a href="javascript:void();" onclick="document.getElementById('delform').onsubmit();" class="delbtn" >Delete</a>
<input type="hidden" name="action" value="deleteuser" />
</form>