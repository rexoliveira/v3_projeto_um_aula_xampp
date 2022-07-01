
      let btn = document.querySelector("#menu_toggle");
      let sidebar = document.querySelector(".sidebar");
      let buscaBtn = document.querySelector(".bx-search");
      let title = document.querySelector(".title_principal");
      let logo = document.querySelector(".logo");

      const checkbox = document.querySelector("#menu_toggle");

      btn.onclick = function () {
        sidebar.classList.toggle("active");
        title.classList.toggle("active");
        logo.classList.toggle("active");
      };

      buscaBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (!checkbox.checked) {
          checkbox.checked = true;
        } else {
          checkbox.checked = false;
        }
      };

      /* script do submenu */
      let arrow = document.querySelectorAll(".arrow");
      for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e)=>{
       let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
       arrowParent.classList.toggle("showMenu");
        });
      }
      let sidebar_sub = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".bx_cog");
      console.log(sidebarBtn);
      sidebarBtn.addEventListener("click", ()=>{
        sidebar_sub.classList.toggle("active");
      });
    