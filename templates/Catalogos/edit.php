<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catalogo $catalogo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $catalogo->id_catalogos],
                ['confirm' => __('Are you sure you want to delete # {0}?', $catalogo->id_catalogos), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Catalogos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="catalogos form content">
            <?= $this->Form->create($catalogo) ?>
            <fieldset>
                <legend><?= __('Edit Catalogo') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('costo');
                    echo $this->Form->control('totalhoras');
                    echo $this->Form->control('cupolimite');
                    //echo $this->Form->control('actividad_id', ['options' => $actividades, 'empty' => true]);

                    echo "Actividades";
                    echo "<br></br> ";

                    echo"<select name= 'actividad_id'>";
                    foreach($actividades as $actividade){
                        echo"<option value ='".$actividade['id_actividades']."'>".$actividade['descripcion']."</option>";
                    }
                    echo"</select>";



                    //echo $this->Form->control('evento_id', ['options' => $eventos, 'empty' => true]);

                    echo "Eventos";
                    echo "<br></br> ";

                    echo"<select name= 'evento_id'>";
                    foreach($eventos as $Evento){
                        echo"<option value ='".$Evento['id_eventos']."'>".$Evento['titulo']."</option>";
                    }
                    echo"</select>";




                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
