  <link rel="stylesheet" href="./css/candidates_files.css">
  <body>
  <?php include('candidates_status_header.php') ?>
<div class="options">
 <p><a style="color:#979797" href="Candidates_specific.php">At a glance</a></p>
    <p><a style="color:#979797" href="candidates_status.php">Status</a></p>
   <p><a style="color:#979797" href="candidates_activity.php">Activity</a></p><br>
   <span style="color:#3598DB"><a style="color:#3598DB" href="candidates_files"> <b>| Files </b> </a></span>
      <p><a style="color:#979797" href="candidates_notes.php">Notes</a></p>
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
                <div class="upload">Upload Files</div>
                <div class="filetype">File Type*<br>
                <select name="cars" id="cars">
    <option value="volvo">Last edited</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
  </div>
  <div class="filetype">Visibility*<br>
                <select name="cars" id="cars">
    <option value="volvo">Internal</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
  </div>
  <div class="filetype">Validity*<br>
                <select name="cars" id="cars">
    <option value="volvo">System Verified</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
  <div class="box">
  <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-folder-symlink-fill" viewBox="0 0 16 16">
  <path d="M13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2l.04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3zM2.19 3c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293L7.586 3H2.19zm9.608 5.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742z"/>
</svg>
<div class="drag">
Drag and Drop a File<br>
&emsp;&emsp;&emsp;or<br>
<button onclick="#">Browse</button></div>
<div class="a">
<button style="color:white">Upload</button></div>
</div>
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
  <div class="files">
  <input type="checkbox">
  <div class="added"><span style="color:979797">Added on</span> <br>05-05-2020</div>
  <div class="filename"><a href="#">File Name.pdf</a><br>300kb</div>
  <div class="resume">Resume<br><a style="color:green" href="#">View
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>
</a>
</div>
<div class="internal">
Internal<br>System verified</div>
<img src="img/Ellipse 148.png" width="70" height="70" alt="">
<div class="uploaded">
Uploaded by<br>
Sasuke uchi</div>

<div class="delete">
<span style="color:red">Delete<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></span><br>
<a href="#"><span style="color:#3598DB">Download<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-arrow-down-fill" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z"/>
</svg></span></a>
</div>
  </div>
    <div class="files">
  <input type="checkbox">
  <div class="added"><span style="color:979797">Added on</span> <br>05-05-2020</div>
  <div class="filename"><a href="#">File Name.pdf</a><br>300kb</div>
  <div class="resume">Resume<br><a style="color:green" href="#">View
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>
</a>
</div>
<div class="internal">
Internal<br>System verified</div>
<img src="img/Ellipse 148.png" width="70" height="70" alt="">
<div class="uploaded">
Uploaded by<br>
Sasuke uchi</div>

<div class="delete">
<span style="color:red">Delete<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></span><br>
<a href="#"><span style="color:#3598DB">Download<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-arrow-down-fill" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z"/>
</svg></span></a>
</div>
  </div>
    <div class="files">
  <input type="checkbox">
  <div class="added"><span style="color:979797">Added on</span> <br>05-05-2020</div>
  <div class="filename"><a href="#">File Name.pdf</a><br>300kb</div>
  <div class="resume">Resume<br><a style="color:green" href="#">View
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>
</a>
</div>
<div class="internal">
Internal<br>System verified</div>
<img src="img/Ellipse 148.png" width="70" height="70" alt="">
<div class="uploaded">
Uploaded by<br>
Sasuke uchi</div>

<div class="delete">
<span style="color:red">Delete<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></span><br>
<a href="#"><span style="color:#3598DB">Download<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-arrow-down-fill" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z"/>
</svg></span></a>
</div>
  </div>  <div class="files">
  <input type="checkbox">
  <div class="added"><span style="color:979797">Added on</span> <br>05-05-2020</div>
  <div class="filename"><a href="#">File Name.pdf</a><br>300kb</div>
  <div class="resume">Resume<br><a style="color:green" href="#">View
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>
</a>
</div>
<div class="internal">
Internal<br>System verified</div>
<img src="img/Ellipse 148.png" width="70" height="70" alt="">
<div class="uploaded">
Uploaded by<br>
Sasuke uchi</div>

<div class="delete">
<span style="color:red">Delete<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></span><br>
<a href="#"><span style="color:#3598DB">Download<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-arrow-down-fill" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z"/>
</svg></span></a>
</div>
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