// toggle class active
const navigation = document.querySelector(`.navigation`);

// Ketika hamburgermenu di klik
document.querySelector(`#hamburger-menu`).onclick = () => {
  navigation.classList.toggle(`active`);
};

// Klik diluar sidebar untuk menghilangkan nav
const hamburger = document.querySelector(`#hamburger-menu`);

document.addEventListener(`click`, function (e) {
  if (!hamburger.contains(e.target) && !navigation.contains(e.target)) {
    navigation.classList.remove(`active`);
  }
});
