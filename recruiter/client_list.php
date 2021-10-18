<?php include('header.php')?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/client_list.css">
<title>Analysed</title>
<body>
<div class="container">
<div class="small_container-1">
            <div class="heading_dash">
                <h1 class="mainHeadingDash">My Client</h1>
                <p class="mainParaDash">create new client and manage old ones</p>
            </div>
            <span>
                <button class="btn" id="myBtn" type="button">Add +</button>
            </span>
            <div class="search-box">
                <details id="dropdown" class="dropdown">
                    <summary class="dropdown-button">
                        <span id="selected-item" class="selected-item"><i class="fa fa-user"></i> Company</span>
                    </summary>
                    <details-menu class="dropdown-menu">
                        <div class="dropdown-menu-list">
                            <label class="dropdown-menu-item">
                                <input type="radio" name="item" value="1" checked>
                                <span>1</span>
                            </label>
                            <label class="dropdown-menu-item">
                                <input type="radio" name="item" value="2">
                                <span>2</span>
                            </label>
                            <label class="dropdown-menu-item">
                                <input type="radio" name="item" value="3">
                                <span>3</span>
                            </label>
                            <label class="dropdown-menu-item">
                                <input type="radio" name="item" value="4">
                                <span>4</span>
                            </label>
                        </div>
                    </details-menu>
                </details>
                <input class="search-form-input" type="text" name="search" placeholder="Search by company name">
                <button class="searchButton">
                    <img src="./img/search-icon-blue.png" />
                </button>
            </div>
            <div class="row-flex-jobj justifycontent-flex-end-1">
                <p class="sortbyText">Sort by :
                    <select name="multi_search" id="multi_search" class="sortbySelect" style="color:#8BD0FF;">
                        <option>Recent</option>
                        <option value="Recent">All</option>
                        <option value="Old">Old</option>
                    </select>
                    <select  id="multi_search" class="search_list">
                        <option value="" default>Last Edited</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                    </select></p>
                </div>
                <div class="row" >
                    <div class="column">
                        <input type="checkbox" class="checkbox" id="c1">
                        <label for="c1"></label>
                    </div>
                    <div class="column">
                        <img src="./img/Ellipse -4.png" class="img">
                    </div>
                    <div class="column">
                        <p class="col-1">Chris Do</p>
                        <span class="col-span-1">Company Name</span>
                    </div>
                    <div class="column">
                        <p class="col-2">HR</p>
                        <span class="col-span-2">Lorem Ipsum</span>
                    </div>
                    <div class="column">
                        <p class="col-3">+91 9089785678</p>
                        <span class="col-span-3">example@gmail.com</span>
                    </div>
                    <div class="column">
                        <p class="col-4"><i class="fa fa-sticky-note" aria-hidden="true"></i> Note</p>
                        <span class="col-span-4"><i class="fa fa-bell" aria-hidden="true"></i> Remainder</span>
                    </div>
                    <div class="column">
                        <p class="col-5">Added on <span>05-05-2020 </span></p>
                        <span class="col-span-5"><i class="fa fa-pencil" aria-hidden="true"></i> Edit<span> 
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete</span></span>
                    </div>
                </div>

                <div class="row" >
                    <div class="column">
                        <input type="checkbox" class="checkbox" id="c2">
                        <label for="c2"></label>
                    </div>
                    <div class="column">
                        <img src="./img/Ellipse -4.png" class="img">
                    </div>
                    <div class="column">
                        <p class="col-1">Chris Do</p>
                        <span class="col-span-1">Company Name</span>
                    </div>
                    <div class="column">
                        <p class="col-2">HR</p>
                        <span class="col-span-2">Lorem Ipsum</span>
                    </div>
                    <div class="column">
                        <p class="col-3">+91 9089785678</p>
                        <span class="col-span-3">example@gmail.com</span>
                    </div>
                    <div class="column">
                        <p class="col-4"><i class="fa fa-sticky-note" aria-hidden="true"></i> Note</p>
                        <span class="col-span-4"><i class="fa fa-bell" aria-hidden="true"></i> Remainder</span>
                    </div>
                    <div class="column">
                        <p class="col-5">Added on <span>05-05-2020 </span></p>
                        <span class="col-span-5"><i class="fa fa-pencil" aria-hidden="true"></i> Edit<span> 
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete</span></span>
                    </div>
                </div>


                <div class="row" >
                    <div class="column">
                        <input type="checkbox" class="checkbox" id="c3">
                        <label for="c3"></label>
                    </div>
                    <div class="column">
                        <img src="./img/Ellipse -4.png" class="img">
                    </div>
                    <div class="column">
                        <p class="col-1">Chris Do</p>
                        <span class="col-span-1">Company Name</span>
                    </div>
                    <div class="column">
                        <p class="col-2">HR</p>
                        <span class="col-span-2">Lorem Ipsum</span>
                    </div>
                    <div class="column">
                        <p class="col-3">+91 9089785678</p>
                        <span class="col-span-3">example@gmail.com</span>
                    </div>
                    <div class="column">
                        <p class="col-4"><i class="fa fa-sticky-note" aria-hidden="true"></i> Note</p>
                        <span class="col-span-4"><i class="fa fa-bell" aria-hidden="true"></i> Remainder</span>
                    </div>
                    <div class="column">
                        <p class="col-5">Added on <span>05-05-2020 </span></p>
                        <span class="col-span-5"><i class="fa fa-pencil" aria-hidden="true"></i> Edit<span> 
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete</span></span>
                    </div>
                </div>

                <div class="row" >
                    <div class="column">
                        <input type="checkbox" class="checkbox" id="c4">
                        <label for="c4"></label>
                    </div>
                    <div class="column">
                        <img src="./img/Ellipse -4.png" class="img">
                    </div>
                    <div class="column">
                        <p class="col-1">Chris Do</p>
                        <span class="col-span-1">Company Name</span>
                    </div>
                    <div class="column">
                        <p class="col-2">HR</p>
                        <span class="col-span-2">Lorem Ipsum</span>
                    </div>
                    <div class="column">
                        <p class="col-3">+91 9089785678</p>
                        <span class="col-span-3">example@gmail.com</span>
                    </div>
                    <div class="column">
                        <p class="col-4"><i class="fa fa-sticky-note" aria-hidden="true"></i> Note</p>
                        <span class="col-span-4"><i class="fa fa-bell" aria-hidden="true"></i> Remainder</span>
                    </div>
                    <div class="column">
                        <p class="col-5">Added on <span>05-05-2020 </span></p>
                        <span class="col-span-5"><i class="fa fa-pencil" aria-hidden="true"></i> Edit<span> 
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete</span></span>
                    </div>
                </div>
            </div>
        </div>
    </body>

<script>
var items = document.getElementsByName('item');
var selectedItem = document.getElementById('selected-item');
var dropdown = document.getElementById('dropdown');

items.forEach(item => {
  item.addEventListener('change', () => {
    if (item.checked) {
      selectedItem.innerHTML = item.value;
      dropdown.open = false;
    }
  });
});
</script>