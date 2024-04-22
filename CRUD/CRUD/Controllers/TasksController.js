const Task = require('../Models/Task');

exports.obterTarefas = async (req, res) => {
	try{
		const tasks = await Task.find();
		res.json(tasks)
	} catch(error){
		res.status(500).json({ error: 'Erro ao buscar tarefas' })
	}
}

exports.adicionarTarefa = async (req, res) => {
	const newTask = req.body;
	try{
		await Task.create(newTask);
		res.json({ message: 'Tarefa adicionada com sucesso!' });
	} catch(error){
		res.status(500).json({ error: 'Erro ao adicionar tarefa' });
	}
}

exports.atualizarTarefa = async (req, res) => {
	const taskId = req.param.id;
	const updateTask = req.body;

	try{
		await Task.findByIdAndUpdate(taskId, updateTask);
		res.json({ message: 'Tarefa atualizada com sucesso!' });
	} catch(error){
		res.status(500).json({ error: 'Erro ao atualizar tarefa' });
	}
}

exports.excluirTarefa = async (req, res) => {
	const taskId = req.param.id;

	try{
		await Task.findByIdAndDelete(taskId);
		res.json({ message: 'Tarefa excluida com sucesso!' });
	} catch(error){
		res.status(500).json({ error: 'Erro ao excluir tarefa' });
	}
}
