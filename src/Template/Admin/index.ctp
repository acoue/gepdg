<div class="blocGris">
	<h2>Administration</h2>
	<div class="container">
		<div class="table-responsive">
	    	<table class="table" width="60%">
			    <tbody>	
			        <tr>
			            <td width='70%'>Voir le journal</td>
			            <td width='30%'><?= $this->Html->link('Historique', ['controller'=>'Historiques', 'action' => 'index'],['class' => 'btn btn-default']) ?></td>
			        </tr>
			        <tr>
			            <td>Administration des Passages de grades</td>
			            <td><?= $this->Html->link('Passages', ['controller'=>'passages', 'action' => 'index'],['class' => 'btn btn-default']) ?></td>
			        </tr>
			        <tr>
			            <td>Administration des Jurys de passages de grades</td>
			            <td><?= $this->Html->link('Jurys', ['controller'=>'Jurys', 'action' => 'index'],['class' => 'btn btn-default']) ?></td>
			        </tr>
			    </tbody>
		    </table>
		</div>
	</div>
</div>