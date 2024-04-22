const express = require('express');
const app = express();
const PORT = 3000;
const mongoose = require('mongoose');
const tasksController = require('./controllers/TasksController');

mongoose.connect('mongodb://localhost:27017/mytaskdb', {
	useNewUrlParser: true,
	useUnifiedTopology: true
});

app.use(express.json());

app.listen(PORT, () => {
	console.log('Servidor rodando na porta ${PORT}');
})

app.get('/tasks', tasksController.obterTarefas);

app.post('/tasks', tasksController.adicionarTarefa);

app.put('/tasks', tasksController.atualizarTarefa);

app.delete('/tasks', tasksController.excluirTarefa);