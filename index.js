const { app, BrowserWindow } = require('electron');

const createWindow = () => {
    const win = new BrowserWindow ({
        width: 800,
        height: 600
    });

    // Carga la ruta de tu servidor local apuntando al archivo Actividad1.php
    win.loadURL('http://localhost/DeportesWeb/Actividad1.php');
};

app.whenReady().then(() => {
    createWindow();
});