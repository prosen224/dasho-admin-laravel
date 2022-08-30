<!--<?php foreach($common_result as $row_common_result){?>-->
<!--<div class="card-body" style="padding-top: .25rem !important;padding-bottom: .25rem !important;padding-left: 1.75rem !important;">-->
<!--  <h4 class="card-title" ><?php echo $row_common_result['user_name'].'<span style="color:red;">'.' (Point::'.$row_common_result['total_points'].')'.'<span style="color:red;">';?></h4>-->

<!--  <button style="font-size:13px;color:white;border-radius:22px;padding:2px;padding-left:15px;padding-right:15px;padding-top:0px;margin-right:-25px;text-decoration:none;background:blue;" type="submit" id="" class="btn btn-primary">View Board</button>-->
<!--</div>-->
<!--<hr>-->
<!--<?php } ?>-->


<div class="card-block">
    <div class="card-block tree-view">
        <div id="basicTree">
            <ul>
                <li>Admin
                    <ul>
                        <li data-jstree='{"opened":true}'>Assets
                            <ul>
                                <li data-jstree='{"type":"file"}'>
                                    Css</li>
                                <li data-jstree='{"opened":true}'>
                                    Plugins
                                    <ul>
                                        <li
                                            data-jstree='{"selected":true,"type":"file"}'>
                                            Plugin one</li>
                                        <li
                                            data-jstree='{"type":"file"}'>
                                            Plugin two</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li data-jstree='{"opened":true}'>Email
                            Template
                            <ul>
                                <li data-jstree='{"type":"file"}'>
                                    Email one</li>
                                <li data-jstree='{"type":"file"}'>
                                    Email two</li>
                            </ul>
                        </li>
                        <li
                            data-jstree='{"icon":"zmdi zmdi-view-dashboard"}'>
                            Dashboard</li>
                        <li
                            data-jstree='{"icon":"zmdi zmdi-format-underlined"}'>
                            Typography</li>
                        <li data-jstree='{"opened":true}'>User
                            Interface
                            <ul>
                                <li data-jstree='{"type":"file"}'>
                                    Buttons</li>
                                <li data-jstree='{"type":"file"}'>
                                    Cards</li>
                            </ul>
                        </li>
                        <li
                            data-jstree='{"icon":"zmdi zmdi-collection-text"}'>
                            Forms</li>
                        <li
                            data-jstree='{"icon":"zmdi zmdi-view-list"}'>
                            Tables</li>
                    </ul>
                </li>
                <li data-jstree='{"type":"file"}'>Frontend</li>
            </ul>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>website_assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url(); ?>website_assets/js/scripts.min.js"></script>
    <script src="<?php echo base_url(); ?>website_assets/customizer/customizer.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery_edit_table.js"></script>
    
<script type="text/javascript" src="<?echo base_url();?>files/assets/pages/j-pro/js/jquery.ui.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){
  
   var treeData;
   
   $.ajax({
        type: "GET",  
        url: "<?php echo base_url('getItem');?>",
        dataType: "json",       
        success: function(response)  
        {
           initTree(response)
        }   
  });
    
  function initTree(treeData) {
    $('#treeview_json').treeview({data: treeData});
  }
   
});
</script>