<div style="margin:150px"></div>
<div class="admin">

    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>USER MANAGEMENT</h1>
            <hr class="seperate">
            <div class = "container" id="usertable">
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
                            <th class='text-center'>Status</th>
                            <th class='text-center'>Unban</th>
                            <th class='text-center'>BAN</th>
                            <th class='text-center'>DEL</th>
                        </tr>
                     </thead>
                     <!--loop pull here-->
                    <?php foreach ($users as $users):?>
                        <tr>
                            <td class='text-center'><?php echo $users['User']['id']?></td>
                            <td class='text-center' ><?php echo $users['User']['username']?></td>
                            <td class='text-center' ><?php echo $users['User']['firstname']?></td>
                            <td class='text-center'><?php echo $users['User']['lastname']?></td><!--pull by id-->
                            <td class='text-center' ><?php echo $users['User']['created']?></td>
                            <td class='text-center' >
                                <?php
                                    if ($users['User']['status'] == 1){
                                        echo 'Active';
                                    }else{
                                        echo 'Banned';
                                    }
                                    ?></td>
                            <td class='text-center'><?php echo $this->Html->link('<i class="glyphicon glyphicon-ok-circle" ></i>',
                                array('controller' => 'admins','action'=> 'unban',$users['User']['id']),
                                array( 'class' => 'btn btn-info','escape' => FALSE),'Are you sure to unban user: '.$users['User']['username'].' ?')?></td>
                            <td class='text-center'><?php echo $this->Html->link('<i class="glyphicon glyphicon-ban-circle" ></i>',
                                array('controller' => 'admins','action'=> 'ban',$users['User']['id']),
                                array( 'class' => 'btn btn-warning','escape' => FALSE),'Are you sure to ban user: '.$users['User']['username'].' ?')?></td>

                            <td class='text-center'><?php echo $this->Html->link('<i class="glyphicon glyphicon-remove-circle" ></i>',
                                array('controller' => 'admins','action'=> 'delete',$users['User']['id']),
                                array( 'class' => 'btn btn-danger','escape' => FALSE),'Are you sure to remove user: '.$users['User']['username'].' ?')?></td>
                        </tr>
                    <?php endforeach;?>
                </table>

            </div>
            <hr class="seperate">
            <?php echo $this->Html->link('Back to main page', array('controller' => 'admins', 'action' => 'index'));?></div>   
        </div>
    </div>
</div>



