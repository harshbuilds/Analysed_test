 <link rel="stylesheet" href="./css/candidates_notes.css">
  <body>
  <?php include('candidates_status_header.php') ?>
<div class="options">
  <p><a style="color:#979797" href="Candidates_specific.php">At a glance</a></p>
   <p><a style="color:#979797" href="candidates_status.php">Status</a></p>
   <p><a style="color:#979797" href="candidates_activity.php">Activity</a></p>
    <p><a style="color:#979797" href="candidates_files.php">Files</a></p><br>
   <span style="color:#3598DB"><a style="color:#3598DB" href="candidates_notes.php"> <b>| Notes </b> </a></span>
     
     </div>
     <div class="search">
     <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#3598DB" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
  <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
</svg> <span style="color:#3598DB">File name&emsp;&emsp;</span><span style="color:#979797"><strong>|&emsp;&emsp;</strong>Search by files</span>
        <i class="fa fa-search" style="color:#3598DB"></i>
   </div>
   <div class="add">
   <button class="btn" id="myBtn"><a style="color:white" href="#">Add+</a></button>
   </div>
   <div id="myModal" class="modal">
            <!-- Modal content -->
      <div class="modal-content">
                <span class="close">close</span>
                <div class="upload">Add new note</div>
                <div class="filetype">Type*<br>
                <select name="cars" id="cars">
    <option value="volvo">Note Type</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
  </div>
  <div class="filetype">Reference to*<br>
                <select name="cars" id="cars">
    <option value="volvo">Select Referenced Item</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
  </div>
  <div class="filetype">Job Reference*<br>
                <select name="cars" id="cars">
    <option value="volvo">Enter ID</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
  </div>
<div class="filetype1">Notes*<br>
<input type="text-area" placeholder="Enter text"></div>
<div class="filetype2">Time Spent*<br>
<div class="input"><input type="text-area" placeholder="Enter text"><br></div>
<button>Submit</button>
</div>
      </div>
   </div>
   <div class="sort">
   <span style="color:#979797">Sort by &emsp;</span><span style="color:#3598DB">Recent &emsp;</span>
   <span>
    <select name="cars" id="cars">
    <option value="volvo">Last edited</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select></span>
  </div>
   <div class="radio">
   <span style="color:#3598DB"><input type="check-box"> Select all &emsp;
   <select name="cars" id="cars">
    <option value="volvo">Select action</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select></span></div>
  <div class="main-notes">
  <input type="check-box">
<div class="lastupdated">Last Updated<br>
<span style="color:black">05-05-2021</span>
</div>
<img src="img/Ellipse 148.png" width="50" height="50" alt="">
<div class="addedby">
Added by<br>
<span style="color:black">John Duo</span>
</div>
<div class="type">
Type<br>
<span style="color:black">Resume Evaluation</span>
</div>
<div class="timespent">
Time Spent<br>
<span style="color:black">30 min</span>
</div>
<div class="edit">
<span style="color:#3598DB">Edit<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></span>
<span style="color:red">Delete<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></span></div>
<div class="addedon">
Added on<br>
<span style="color:black">05-05-2021</span>
</div>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
 sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.</p>

  </div>
   <div class="main-notes">
  <input type="check-box">
<div class="lastupdated">Last Updated<br>
<span style="color:black">05-05-2021</span>
</div>
<img src="img/Ellipse 148.png" width="50" height="50" alt="">
<div class="addedby">
Added by<br>
<span style="color:black">John Duo</span>
</div>
<div class="type">
Type<br>
<span style="color:black">Resume Evaluation</span>
</div>
<div class="timespent">
Time Spent<br>
<span style="color:black">30 min</span>
</div>
<div class="edit">
<span style="color:#3598DB">Edit<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></span>
<span style="color:red">Delete<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></span></div>
<div class="addedon">
Added on<br>
<span style="color:black">05-05-2021</span>
</div>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
 sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.</p>

  </div>
   <div class="main-notes">
  <input type="check-box">
<div class="lastupdated">Last Updated<br>
<span style="color:black">05-05-2021</span>
</div>
<img src="img/Ellipse 148.png" width="50" height="50" alt="">
<div class="addedby">
Added by<br>
<span style="color:black">John Duo</span>
</div>
<div class="type">
Type<br>
<span style="color:black">Resume Evaluation</span>
</div>
<div class="timespent">
Time Spent<br>
<span style="color:black">30 min</span>
</div>
<div class="edit">
<span style="color:#3598DB">Edit<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></span>
<span style="color:red">Delete<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></span></div>
<div class="addedon">
Added on<br>
<span style="color:black">05-05-2021</span>
</div>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
 sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.</p>

  </div>
   <div class="main-notes">
  <input type="check-box">
<div class="lastupdated">Last Updated<br>
<span style="color:black">05-05-2021</span>
</div>
<img src="img/Ellipse 148.png" width="50" height="50" alt="">
<div class="addedby">
Added by<br>
<span style="color:black">John Duo</span>
</div>
<div class="type">
Type<br>
<span style="color:black">Resume Evaluation</span>
</div>
<div class="timespent">
Time Spent<br>
<span style="color:black">30 min</span>
</div>
<div class="edit">
<span style="color:#3598DB">Edit<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></span>
<span style="color:red">Delete<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></span></div>
<div class="addedon">
Added on<br>
<span style="color:black">05-05-2021</span>
</div>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
 sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.</p>

  </div>
  <script>
    var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>