const express = require("express");
const { exec } = require("child_process");
const app = express();
const port = 8080;

app.use(express.json());
app.post("/apagar", (req, res) => {
  console.log("Recibido POST");
  exec("shutdown /s /t 0", (err, stdout, stderr) => {
    if (err) {
      console.error(`Error al apagar: ${err}`);
      return res.sendStatus(500);
    }
    console.log(stdout);
    res.sendStatus(200);
  });
});

app.listen(port, () => {
  console.log(`Servidor ejecutándose en http://localhost:${port}`);
});
