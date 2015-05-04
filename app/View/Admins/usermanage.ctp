<div style="margin:150px"></div>
<div class="admin">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>USER MANAGE</h1>
            <hr class="seperate">
        </div>
    </div>
</div>
<?php echo $User['User']['firstname'] ?> <?php echo $User['User']['lastname'] ?>
<div class="col-sm-10" >
    <div class="container showcontent_nofixes">
    	<h2>Manage Account</h2>
    	<form action="" method="" id="deleteForm">
                <div class="decorform2">
                    <h4 class="decorform3">User Account</h4>
                    <div id="box">
                        <table class="table-striped table-bordered table-striped" style="width:100%" >
                        	<thead>
                            	<tr>
                					<col class='col-sm-1' />
                					<col class='col-sm-2' />
                					<col class='col-sm-3' />
                					<col class='col-sm-3' />
                					<col class='col-sm-2' />
                					<col class='col-sm-1' />
                					<th class='text-center'>User ID</th>
                					<th class='text-center'>Username</th>
                					<th class='text-center'>Firstname</th>
                					<th class='text-center'>Lastname</th>
                					<th class='text-center'>Date Created</th>
                					<th class='text-center'></th>
                				</tr>
                             </thead>
                             <!--loop pull here-->
                            <?php foreach ($users as $users):?>
                                <tr>
                                    <td class='text-center'><?php echo $users['Users']['id']?></td>
                                    <td class='text-center' ><?php echo $users['Users']['username']?></td>
                                    <td class='text-center' ><?php echo $users['Users']['firstname']?></td>
                                    <td class='text-center'><?php echo $users['Users']['lastname']?></td><!--pull by id-->
                                    <td class='text-center' ><?php echo $users['Users']['created']?></td>
                                    <td class='text-center'><?php echo $this->Html->link('Block', array('controller' => 'admins','action'=> 'block',$users['User']['id']),
                                            array( 'class' => 'btn btn-danger'))?></td>
                                </tr>
                            <?php endforeach;?>
                        </table>

                    </div>
                </div>
        </form>

    </div>