import TypeIt from "typeit";


new TypeIt("#myelement", {
  waitUntilVisible: true,
  lifeLike: true, 
  speed: 150,
})
.type("Lets make the world a better place")
.pause(300)
.delete(5)
.pause(300)
.type('code')
.go();