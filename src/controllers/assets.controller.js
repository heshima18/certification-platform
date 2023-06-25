import fs from 'fs';
import path from 'path';

export let stylesheet = (req, res) => {
  const { filename } = req.params;
  const file = path.join(__dirname, '..', 'resources', 'css', filename);

  fs.readFile(file, (err, data) => {
    if (err) {
      res.status(404).send('File not Found');
      return;
    }

    const contentLength = data.toString().length;

    res.writeHead(200, {
      'Content-Type': 'text/css',
      'Content-Length': contentLength.toString(),
    });
    res.end(data);
  });
};
export let assets = (req, res) => {
  const  filename  = req.params[0];
  const file = path.join(__dirname, '..', 'pages','demo', 'assets', filename);

  fs.readFile(file, (err, data) => {
    if (err) {
      res.status(404).send('File not Found');
      return;
    }

    const contentLength = data.toString().length;

    res.writeHead(200, {
      'Content-Type': 'text/css',
      'Content-Length': contentLength.toString(),
    });
    res.end(data);
  });
};
