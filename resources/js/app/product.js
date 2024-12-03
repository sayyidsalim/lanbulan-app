const targetNode = document.querySelectorAll(".target-button");
targetNode.forEach((element) => {
    element.addEventListener("click", function (e) {
        e.preventDefault();
        let data = e.target.getAttribute("data-product-id");
        const url = new URL(window.location.href);
        url.searchParams.set("product_id", data);
        history.pushState({}, "", url);
    });
});

const closeNode = document.querySelectorAll(".close-button");

closeNode.forEach((element) => {
    element.addEventListener("click", function (e) {
        const url = new URL(window.location.href);
        const params = new URLSearchParams(url.search);
        params.delete("product_id");
        history.back();
    });
});
