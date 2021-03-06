<div id="role-users-view" title="<?=$this->title?>">
    <div>
        <table id="tbl-role-users" class="table table-condensed">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>e-mail</th>
                </tr>
            </thead>
            <tbody data-bind="foreach: coreWebApp.RoleUsers.user_list">
                <tr>
                    <td><input type="checkbox" data-bind="checked: selected, click: coreWebApp.SelectRoleUser($data)"/>&nbsp;&nbsp;<span data-bind="text: full_user_name"/></td>
                    <td data-bind="text: email"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="position: absolute; bottom: 3pt;" class="row col-md-12">
        <div class="form-group col-md-12">
            <label class="control-label" for="comments">Comments</label>
            <textarea type="text" id="sender-comment" class="textarea form-control" name="sender-comment" maxlength="500" rows="3" placeholder="Add your comments here ..."
                      data-validation-length="1-500" data-bind="value: coreWebApp.RoleUsers.doc_sender_comment" ></textarea>
        </div>
    </div>
   
</div>
