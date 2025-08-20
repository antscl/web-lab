
const Koa = require('koa');
const app = new Koa();

app.use(ctx => {
  ctx.body = 'Hello from Koa.js!';
});

app.listen(3000, () => {
  console.log('Koa server running at http://localhost:3000');
});
