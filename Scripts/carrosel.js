const containers = document.querySelectorAll(".container");

containers.forEach((container) => {
  const controlLeft = container.querySelector(".arrow-left");
  const controlRight = container.querySelector(".arrow-right");
  const gallery = container.querySelector(".gallery");
  const items = container.querySelectorAll(".item");
  const maxItems = items.length;
  let currentItem = 0;

  controlLeft.addEventListener("click", () => {
    currentItem = (currentItem - 1 + maxItems) % maxItems;
    updateCarousel();
  });

  controlRight.addEventListener("click", () => {
    currentItem = (currentItem + 1) % maxItems;
    updateCarousel();
  });

  function updateCarousel() {
    items.forEach((item) => item.classList.remove("current-item"));
    items[currentItem].classList.add("current-item");

    const containerRect = container.getBoundingClientRect();
    const itemRect = items[currentItem].getBoundingClientRect();

    if (itemRect.top < containerRect.top || itemRect.bottom > containerRect.bottom) {
      // O item está fora da visualização do contêiner, rolar com animação suave
      items[currentItem].scrollIntoView({
        behavior: "smooth",
        block: "nearest",
        inline: "start",
      });
    } else {
      // O item está dentro da visualização do contêiner, rolar instantaneamente
      items[currentItem].scrollIntoView({
        behavior: "auto",
        block: "nearest",
        inline: "start",
      });
    }
  }
});
