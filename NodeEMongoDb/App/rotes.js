const ejs = require('ejs');
const express = require('express');
const router = express.Router();



router.get('/rota1', (req,res) => {
  response = `Você acessou a rota 1`;
  let html = ejs.render('<%= response; %>', response);

  res.send(html);
});

router.get('/rota2', (req,res) => {
  response = `Você acessou a rota 2`;
  let html = ejs.render('<%= response; %>', response);
  res.send(html);
});

router.get('/rota3', (req,res) => {
  response = `Você acessou a rota 3`;
  let html = ejs.render('<%= response; %>', response);
  res.send(html);
});

module.exports = router;