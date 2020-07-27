//latest product
$(".latest-product-carousel").owlCarousel({
    loop: false,
    nav: true,
    dots: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 4,
        },
    },
});

//home page product cart
$(".home-page-product-cart-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 5,
        },
    },
});

//banner carousel
$(".banner-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});

//navbar carousel
$(".nav-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 3,
        },
        600: {
            items: 5,
        },
        1000: {
            items: 8,
        },
    },
});

//show search for mobile
$(document).ready(function () {
    $(".search-mob").click(function () {
        $(".topbar-bottom-search").slideToggle();
    });
});

//sticky topbar js start
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 15) {
            $(".topbar-bottom").css({
                position: "fixed",
                top: "0",
                left: "0",
                width: "100%",
                "z-index": "6",
                background: "white",
                "box-shadow": "#e5e5e5 0px 0px 0px 2px",
            });
        } else {
            $(".topbar-bottom").css({
                position: "unset",
                top: "0",
                left: "0",
                width: "100%",
                "z-index": "5",
                background: "unset",
                "box-shadow": "unset",
            });
        }
    });
});

//sticky topbar mobile js start
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $(".topbar-mob").css({
                position: "fixed",
                top: "0",
                left: "0",
                "z-index": "5",
                background: "white",
                "box-shadow": "#e5e5e5 0px 0px 0px 2px",
                "padding-top": "30px",
                width: "100%",
            });
        } else {
            $(".topbar-mob").css({
                position: "unset",
                top: "0",
                left: "0",
                "z-index": "5",
                background: "unset",
                "box-shadow": "unset",
                "padding-top": "30px",
            });
        }
    });
});

//show item mob
$(document).ready(function () {
    $(".show-item-mob").click(function () {
        var showItemMob = $(this).attr("id");
        if (showItemMob != "all") {
            $("." + showItemMob).slideToggle();
            $(document).click(function (divclose) {
                if ($(divclose.target).closest(".show-item-mob").length == 0) {
                    $(".show-item").slideUp();
                }
            });
        }
    });
});

//home page product filtering js
$(document).ready(function () {
    $(".filter-category").click(function () {
        var filterProduct = $(this).attr("id");
        if (filterProduct != "all") {
            setTimeout(function () {
                $("." + filterProduct).removeClass("hide-item");
            });
            $(".filter-product-list").addClass("hide-item");
        }
    });

    $(".select-filter").click(function () {
        var selectProduct = $(this).attr("id");
        if (selectProduct != "all") {
            setTimeout(function () {
                $("." + selectProduct).addClass("active-filter");
            });
            $(".select-filter").removeClass("active-filter");
        }
    });
});
//home page product filtering js

$(function () {
    $('input[type="number"]').niceNumber();
});

var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function (e) {
            /*when an item is clicked, update the original select box,
        and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName(
                        "same-as-selected"
                    );
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
        /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
  except the current select box:*/
    var x,
        y,
        i,
        xl,
        yl,
        arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i);
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);

/* price filtering */
$(document).ready(function () {
    var outputSpan = $("#spanOutputpc");
    $("#sliderpc").slider({
        range: true,
        min: 100,
        max: 100000,
        slide: function (event, ui) {
            outputSpan.html(ui.values[0] + "-" + ui.values[1] + " Taka");
        },
    });
});

//filter product js start
$(document).ready(function () {
    $(".filter-for-mob").click(function () {
        $(".shop-left").slideToggle();
        $(document).click(function (divclose) {
            if (
                $(divclose.target).closest(".filter-for-mob").length == 0 &&
                $(divclose.target).closest(".shop-left").length == 0
            ) {
                $(".shop-left").slideUp();
            }
        });
    });
});

//sort js
$(document).ready(function () {
    $(".click-sort").click(function () {
        var clickSort = $(this).attr("id");
        if (clickSort != "all") {
            setTimeout(function () {
                $("." + clickSort).addClass("active-sort");
            }, 100);
            $(".click-sort").removeClass("active-sort");
        }
    });
});

//list wise product show
$(document).ready(function () {
    $(".fa-list").click(function () {
        $(".col-wise").hide();
        $(".list-wise").fadeIn();
        $(".fa-list").addClass("active-type");
        $(".fa-th-large").removeClass("active-type");
    });
    $(".fa-th-large").click(function () {
        $(".col-wise").fadeIn();
        $(".list-wise").hide();
        $(".fa-list").removeClass("active-type");
        $(".fa-th-large").addClass("active-type");
    });
});

//mobile navbar js start
$(document).ready(function () {
    $(".show-nav").click(function () {
        $(".fixed-menu-mob").css({
            transform: "translateX(0%)",
            transition: "0.4s ease-in-out",
        });
        $(".show-nav").hide();
        $(".hide-nav").show();
        $("html,body").css({
            overflow: "hidden",
        });
        $(document).click(function (divclose) {
            if (
                $(divclose.target).closest(".fixed-menu-mob").length == 0 &&
                $(divclose.target).closest(".menu-dropdown-mob").length == 0
            ) {
                $(".fixed-menu-mob").css({
                    transform: "translateX(-100%)",
                    transition: "0.4s ease-in-out",
                });
                $(".show-nav").show();
                $(".hide-nav").hide();
                $("html,body").css({
                    overflow: "auto",
                });
            }
        });
    });

    $(".hide-nav").click(function () {
        $(".fixed-menu-mob").css({
            transform: "translateX(-100%)",
            transition: "0.4s ease-in-out",
        });
        $(".show-nav").show();
        $(".hide-nav").hide();
        $("html,body").css({
            overflow: "auto",
        });
    });
    $(".nav-mega-menu").click(function () {
        $(".mega-menu-mob").slideToggle();
    });
});

//product details js
$(document).ready(function () {
    $(".for-img1").click(function () {
        $(".to-img1").show();
        $(".to-img2").hide();
        $(".to-img3").hide();
        $(".caret-one").show();
        $(".caret-two").hide();
        $(".caret-three").hide();
    });
    $(".for-img2").click(function () {
        $(".to-img1").hide();
        $(".to-img2").show();
        $(".to-img3").hide();
        $(".caret-one").hide();
        $(".caret-two").show();
        $(".caret-three").hide();
    });
    $(".for-img3").click(function () {
        $(".to-img1").hide();
        $(".to-img2").hide();
        $(".to-img3").show();
        $(".caret-one").hide();
        $(".caret-two").hide();
        $(".caret-three").show();
    });
});

$(document).ready(function () {
    $(".block__pic").imagezoomsl({
        zoomrange: [3, 3],
    });
});

//product deatils js
$(document).ready(function () {
    $(".to-description").click(function () {
        $(".for-description-row").css({
            display: "flex",
        });
        $(".for-review-row").hide();
        $(".to-review").removeClass("active-detail");
        $(".to-description").addClass("active-detail");
        $(".active-description").fadeIn();
        $(".active-review").hide();
    });
    $(".to-review").click(function () {
        $(".for-description-row").hide();
        $(".for-review-row").css({
            display: "flex",
        });
        $(".to-review").addClass("active-detail");
        $(".to-description").removeClass("active-detail");
        $(".active-description").hide();
        $(".active-review").fadeIn();
    });
});

//review popup js
$(document).ready(function () {
    $(".show-review-popup").click(function () {
        var reviewPopup = $(this).attr("id");

        if (reviewPopup != "all") {
            $("." + reviewPopup).css({
                opacity: "1",
                visibility: "unset",
                transition: "0.4s ease-in-out",
            });
            $(".main-popup-box").css({
                transform: "translateY(-50%)",
                transition: "0.4s ease-in-out",
                left: "0",
                opacity: "1",
                visibility: "unset",
            });
            $("html,body").css({
                overflow: "hidden",
            });
            $(document).click(function (divclose) {
                if (
                    $(divclose.target).closest(".show-review-popup").length ==
                        0 &&
                    $(divclose.target).closest(".main-popup-box").length == 0
                ) {
                    $(".order-review-popup").css({
                        opacity: "0",
                        visibility: "hidden",
                        transition: "0.2s ease-in-out",
                    });
                    $("." + reviewPopup).css({
                        opacity: "0",
                        visibility: "hidden",
                        transition: "0.2s ease-in-out",
                    });
                    $(".main-popup-box").css({
                        transform: "translateY(-80%)",
                        transition: "0.2s ease-in-out",
                        left: "0",
                        opacity: "0",
                        visibility: "none",
                    });
                    $("html,body").css({
                        overflow: "auto",
                    });
                }
            });
            $(".hide-popup").click(function () {
                $(".order-review-popup").css({
                    opacity: "0",
                    visibility: "hidden",
                    transition: "0.2s ease-in-out",
                });
                $("." + reviewPopup).css({
                    opacity: "0",
                    visibility: "hidden",
                    transition: "0.2s ease-in-out",
                });
                $(".main-popup-box").css({
                    transform: "translateY(-80%)",
                    transition: "0.2s ease-in-out",
                    left: "0",
                    opacity: "0",
                    visibility: "none",
                });
                $("html,body").css({
                    overflow: "auto",
                });
            });
        }
    });
});

//shop page category dropdown js start
$(document).ready(function () {
    $(".show-category").click(function () {
        var shopCategory = $(this).attr("id");
        if (shopCategory != "all") {
            $("." + shopCategory).slideToggle();
            $(document).click(function (divclose) {
                if ($(divclose.target).closest(".show-category").length == 0) {
                    $(".sub-cat-dropdown").slideUp();
                }
            });
        }
    });
});
//shop page category dropdown js end

//go to top js
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $(".go-to-top .fas").fadeIn();
        } else {
            $(".go-to-top .fas").fadeOut();
        }
    });
});

//product quick view js
// 	$(document).ready(function(){
//     $(".show-product-popup").click(function(){
//         var productQuickView = $(this).attr('id');

//         if( productQuickView != 'all' ){

//             $("." + productQuickView ).css({
//                 "opacity" : "1",
//                 "visibility" : "unset",
//             })
//             $(".product-quick-view-main-box").slideDown();
//             $('html,body').css({
//                 "overflow" : "hidden",
//             })

//             $(document).click(function(divclose){
//                 if( $(divclose.target).closest(".show-product-popup").length == 0 && $(divclose.target).closest(".product-quick-view-main-box").length == 0 && $(divclose.target).closest(".product-main-img img").length == 0 ){
//                     $(".product-quick-view").css({
//                         "opacity" : "0",
//                         "visibility" : "hidden",
//                     })
//                     $(".product-quick-view-main-box").slideUp();
//                     $('html,body').css({
//                     "overflow" : "auto",
//                 })
//                 }
//             })

//             $(".hide-quick-view").click(function(){
//                 $(".product-quick-view").css({
//                     "opacity" : "0",
//                     "visibility" : "hidden",
//                 })
//                 $(".product-quick-view-main-box").slideUp();
//                 $('html,body').css({
//                     "overflow" : "auto",
//                 })
//             })

//         }

//     })
// })

 const regiform = document.getElementById("registrationForm");


const checkRequired = (v) => {
    if (!v) {
        return false;
    } else {
        return true;
    }
};

const formValidationRule = (formInput) => {
    //name validation
    if (formInput == 1) {
        if (checkRequired(regiform[formInput].value)) {
            validForm.name = true;
            validationClass[formInput - 1].innerHTML = "";
        } else {
            validForm.name = false;
            validationClass[formInput - 1].innerHTML = "Name required";
        }
    }

    // email validation
    if (formInput == 2) {
        if (validateEmail(regiform[formInput].value)) {
            validForm.email = true;
            validationClass[formInput - 1].innerHTML = "";
        } else {
            validForm.email = false;
            validationClass[formInput - 1].innerHTML = "Enter a valid email";
        }
        function validateEmail(email) {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
    }

    // poassword validation
    if (formInput == 4) {
        if (checkRequired(regiform[formInput].value)) {
            validForm.password = true;
            validationClass[formInput - 1].innerHTML = "";
        } else {
            validForm.password = false;
            validationClass[formInput - 1].innerHTML = "Password required";
        }
    }

    // phone validation
    if (formInput == 3) {
        if (checkRequired(regiform[formInput].value)) {
            validForm.phone = true;
            validationClass[formInput - 1].innerHTML = "";
        } else {
            validForm.phone = false;
            validationClass[formInput - 1].innerHTML = "Phone required";
        }
    }

    // Address validation
    if (formInput == 5) {
        if (checkRequired(regiform[formInput].value)) {
            validForm.address = true;
            validationClass[formInput - 1].innerHTML = "";
        } else {
            validForm.address = false;
            validationClass[formInput - 1].innerHTML = "Required";
        }
    }

    // city validation
    if (formInput == 6) {
        if (checkRequired(regiform[formInput].value)) {
            validForm.city = true;
            validationClass[formInput - 1].innerHTML = "";
        } else {
            validForm.city = false;
            validationClass[formInput - 1].innerHTML = "Required";
        }
    }

    // div validation
    if (formInput == 7) {
        if (checkRequired(regiform[formInput].value)) {
            validForm.div = true;
            validationClass[formInput - 1].innerHTML = "";
        } else {
            validForm.div = false;
            validationClass[formInput - 1].innerHTML = "Required";
        }
    }

    // div validation
    if (formInput == 8) {
        if (checkRequired(regiform[formInput].value)) {
            validForm.zip = true;
            validationClass[formInput - 1].innerHTML = "";
        } else {
            validForm.zip = false;
            validationClass[formInput - 1].innerHTML = "Required";
        }
    }
};

let validForm = {
    name: false,
    email: false,
    phone: false,
    password: false,
    address: false,
    city: false,
    div: false,
    zip: false,
};
let validationClass = document.getElementsByClassName("validation");

for (let formInput in regiform) {
    regiform[formInput].onblur = () => {
        formValidationRule(formInput)
    };
}



function submitVerify(){
    for (let formInput in regiform) {        
            formValidationRule(formInput)       
    }
    

  if(validForm.name && validForm.email && validForm.phone && validForm.password && validForm.address && validForm.city && validForm.div && validForm.zip){
      return true;
  }
  return false


}

