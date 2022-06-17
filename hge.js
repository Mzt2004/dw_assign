let homeslideimages=["homeslide5.jpg","homeslide2.jpg","homeslide6.jpg","homeslide3.jpg","homeslide4.jpg"];
let m=0;
let next=()=>{
    m++;
    if (m==homeslideimages.length){
        m=0;
    }
homeslideimg.src=".//photos and vds/"+homeslideimages[m];
}
let previous=()=>{
    m--;
    if (m==-1){
        m=homeslideimages.length-1;
    }
    homeslideimg.src=".//photos and vds/"+homeslideimages[m];
}
let chg=()=>{
    setInterval(next,3000);
}

let homesearch=()=>{
    navsearchbar.classList.toggle("hidesearchbar");
    navsearchbar.classList.toggle("showsearchbar");
    
    }


    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }

  let moredetail=()=>{
    
    moredetails.style.display="block";
  }
  let goback=()=>{
    moredetails.style.display="none";
  }

  let moredetail1=()=>{
    
    moredetails1.style.display="block";
  }
  let goback1=()=>{
    moredetails1.style.display="none";
  }
  let moredetail2=()=>{
    
    moredetails2.style.display="block";
  }
  let goback2=()=>{
    moredetails2.style.display="none";
  }
  let cartactivate=()=>{
    cartcontainer.style.display="flex";
  }
  let cartdeactivate=()=>{
    cartcontainer.style.display="none";
  }