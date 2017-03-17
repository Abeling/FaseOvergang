<!DOCTYPE html>
  <section>
    <div id="main">
      <div id="primaryadmin">
        <table id="personaltable">
            <tr id="hds">
              <th>ID</th>
              <th>School name</th>
              <th colspan="2">Options</th>
            </tr>
          {foreach from=$result item=oneItem}
            <tr>
              <td><p>{$oneItem.id}</p></td>
              <td><p>{$oneItem.schoolName}</p></td>
              <td><p><a href="?action=admin&cms_action=editnewsarticles&id={$oneItem.id}">edit</a></p></td>
              <td><p><a href="?action=admin&cms_action=deletenewsarticles&id={$oneItem.id}">delete</a></p></td>
            </tr>
          {/foreach}
        </table>
        <p id=insert><a href=?action=admin&cms_action=insertnewsarticles><img src="content/img/insertButton.png"></img></a></p>
      </div>
