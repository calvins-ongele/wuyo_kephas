<style>
    

    .vbtn{
        border:none;
        padding:6px 18px;
        border-radius:8px;
        cursor:pointer;
        font-size:15px;
        transition:.2s;
    }

    .vbtn-primary{
        background:#0d6efd;
        color:#fff;
    }

    .vbtn-primary:hover{
        background:#0b5ed7;
    }
    .btn-success {
        background-color: rgb(61, 158, 61);
    }

    .vbtn-secondary{
        background:#6c757d;
        color:#fff;
    }
    .btn-warning{
        color:#ffc107;
        border-color:whitesmoke;
    }
    .btn-warning:hover{color:#212529;background-color:#ffc107;border-color:#ffc107}

    .vbtn-secondary:hover{
        background:#5c636a;
    }

    .vbtn-danger{
        background:#dc3545;
        color:#fff;
    }

    .vbtn-danger:hover{
        background:#bb2d3b;
    }

    /* MODAL */
    .vmodal{
        position:fixed;
        inset:0;
        display:flex;
        align-items:center;
        justify-content:center;
        padding:20px;
        z-index:9999;

        opacity:0;
        visibility:hidden;
        transition: .4s ease;
    }

    .vmodal.show{ 
        opacity:1;
        visibility:visible; 
    }

    /* BACKDROP */
    .vmodal-backdrop{
        position:absolute;
        inset:0;
        background:rgba(0,0,0,.55);
        backdrop-filter:blur(2px);
    }

    /* DIALOG */
    .vmodal-dialog{
        position:relative;
        width:100%;
        max-width:500px;
        background:#fff;
        border-radius:14px;
         display:flex;
    flex-direction:column;
    z-index:2;
        overflow:hidden;
        max-height:calc(100vh - 40px);
        box-shadow:
            0 10px 30px rgba(0,0,0,.2);

        transform:translateY(-20px) scale(.97);
        transition:1s ease;
        
    }

    .vmodal.show .vmodal-dialog{
        transform:translateY(0) scale(1);
    }

    .vmodal-header {
    padding:16px 20px;
    border-bottom:1px solid #e9ecef;

    flex-shrink:0;
    }
    .vmodal-footer{
        padding:16px 20px;
        border-bottom:1px solid #e9ecef;
    }

.vmodal-body{
    padding:20px;
    color:#444;
    line-height:1.6; 
    overflow-y:auto; 
    /* Smooth scrolling on phones */
    -webkit-overflow-scrolling:touch;
}

    .vmodal-footer{
    padding:16px 20px;

    border-top:1px solid #e9ecef;

    display:flex;
    justify-content:flex-end;
    gap:10px;

    flex-wrap:wrap;

    flex-shrink:0;
    }

    .vmodal-title{
        margin:0;
        font-size:20px;
    }
 

    .vmodal-close{
        position:absolute;
        top:14px;
        right:16px;

        border:none;
        background:none;

        font-size:24px;
        line-height:1;
        cursor:pointer;
        color:#666;
    }

    .vmodal-close:hover{
        color:#000;
    }

    /* OPTIONAL SIZES */
    .vmodal-sm .vmodal-dialog{
        max-width:350px;
    }

    /* .vmodal-lg .vmodal-dialog{
        max-width:800px;
    } */

    /* MOBILE */
    @media(max-width:576px){

    .vmodal{
        padding:12px;
        align-items:center;
    }

    .vmodal-dialog{
        width:100%;
        max-width:100%;

        max-height:calc(100vh - 24px);

        border-radius:12px;
    }

    .vmodal-body{
        padding:16px;
    }

    .vmodal-footer{
        padding:16px;
    }
}
</style>
<script>
    // OPEN MODAL
    document.querySelectorAll("[data-modal-open]").forEach(button => {

        button.addEventListener("click", () => {

            const target = document.querySelector(
                button.dataset.modalOpen
            );

            target.classList.add("show");

            document.body.style.overflow = "hidden";
        });
    });

    // CLOSE FUNCTION
    function closeModal(modal){

        modal.classList.remove("show");

        document.body.style.overflow = "";
    }

    // CLOSE BUTTONS
    document.querySelectorAll("[data-modal-close]").forEach(button => {

        button.addEventListener("click", () => {

            closeModal(button.closest(".vmodal"));
        });
    });

    // X BUTTON
    document.querySelectorAll(".vmodal-close").forEach(button => {

        button.addEventListener("click", () => {

            closeModal(button.closest(".vmodal"));
        });
    });

    // BACKDROP CLICK
    document.querySelectorAll(".vmodal").forEach(modal => {

        modal.addEventListener("click", (e) => {

            if(e.target.classList.contains("vmodal-backdrop")){

                closeModal(modal);
            }
        });
    });

    // ESC KEY
    document.addEventListener("keydown", (e) => {

        if(e.key === "Escape"){

            document.querySelectorAll(".vmodal.show")
                .forEach(modal => closeModal(modal));
        }
    });
</script>