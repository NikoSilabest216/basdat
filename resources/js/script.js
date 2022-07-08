$(document).ready(function () {
  $("#btn1").click(function () {
    alert("Click the button again to show/hide the video");
  });
  $("button").click(function () {
    $("iframe").animate({
      height: 'toggle'
    });
  });
});

$(function () {
  $("#mySearch").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#list .contain-game").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});



var games = [
  {
    name: "Valo",
    rating: "5.0"
  },
  {
    name: "Elden Ring",
    rating: "4.0"
  },
  {
    name: "PSO2",
    rating: "4.3"
  },
  {
    name: "Watch Dogs",
    rating: "4.8"
  },
  {
    name: "Final Fantasy XV",
    rating: "3.2"
  },
  {
    name: "Call of Duty",
    rating: "4.4"
  },
  {
    name: "Rainbow Six Siege",
    rating: "3.5"
  },
  {
    name: "Cyberpunk 2077",
    rating: "5.0"
  },
  {
    name: "GhostWire:Tokyo",
    rating: "2.5"
  },
  {
    name: "Batman Arkham ",
    rating: "3.4"
  },
]

$(document).ready(function () {
  if(localStorage.getItem('game')!==null){
     games=JSON.parse(localStorage.getItem('game'))
    //  localStorage.clear()
  }
  else{
    localStorage.setItem('game',JSON.stringify(games))
  }
  console.log(localStorage.getItem('game'))
  appendData();

});

var sorted = false;
var sorting = '';

function Ascending_sort(a, b) {
  return ($(b).find(sorting).text().toUpperCase()) <
    ($(a).find(sorting).text().toUpperCase()) ? 1 : -1;
}
function Descending_sort(a, b) {
  return ($(a).find(sorting).text().toUpperCase()) <
    ($(b).find(sorting).text().toUpperCase()) ? 1 : -1;
}

$("#btn3").on('click', function () {
  sorting = ".title"
  if (!sorted) {
    $(".contain-game").sort(Ascending_sort).appendTo("#gamelist");
    sorted = true;
  }
  else {
    $(".contain-game").sort(Descending_sort).appendTo("#gamelist");
    sorted = false
  }
});

$("#btn4").on('click', function () {
  sorting = ".rate"
  if (!sorted) {
    $(".contain-game").sort(Ascending_sort).appendTo("#gamelist");
    sorted = true;
  }
  else {
    $(".contain-game").sort(Descending_sort).appendTo("#gamelist");
    sorted = false
  }
});

var modal = document.getElementById("myModal");


var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];


btn.onclick = function () {
  modal.style.display = "block";
}


span.onclick = function () {
  modal.style.display = "none";
}


window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



$(function () {
  $("#btnAdd").on('click', function () {
    var titleInput = $("#fname")
    var ratingInput = $("#lname")
    
    if(titleInput.val()&&ratingInput.val()){
      games.push({
        name: titleInput.val(),
        rating: ratingInput.val()
      })
      localStorage.setItem('game', JSON.stringify(games))
      appendData();
    }
    else{
      alert("Click the button again to show/hide the video");
    }
   
  })
})


$(function () {
  $("body").on('click',".contain-game #delButt", function () {
  var currentIndex=$(this).parent().parent().parent().parent().index()
  var filterArray= games.filter(function(value,index){
    return index !== currentIndex;
  })
  games=filterArray;
  localStorage.setItem('game',JSON.stringify(filterArray))
  appendData()
  if(filterArray.length<1){
    localStorage.removeItem('game')
  }
  })

})

function appendData(){
  var list = "";
  $('#gamelist .contain-game').remove()
  for (i = 0; i < games.length; i++) {
    console.log(games[i])
    list += `<div class="container-shop contain-game">
        <div class="card">
          <div class="imgBx">
            <img src="assets/images/v.png">
          </div>
          <div class="contentBx">
            <h2 class="title">${games[i].name}</h2>
            <div class="ratingBx">
            <h2 class="rate"><i class="fa-regular fa-star"></i>${games[i].rating}</h2>
            </div>
            <a href="#">Buy Now</a>
            <div class="ratingBx2">
            <h2 class="rate"><i class="fa-regular fa-star"></i>${games[i].rating}</h2>
            <button id="delButt">Delete</button>
            </div>
          </div>
        </div> 
      </div>`;
  }
  $("#gamelist").append(list);
}





