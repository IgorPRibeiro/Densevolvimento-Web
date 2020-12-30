var express = require('express');
const router = require('./rotes')
var app = express();

app.use(router);

app.listen(3000, function() {
  console.log('App de Exemplo escutando na porta 3000!');
});

