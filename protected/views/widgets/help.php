<button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#helpModal">?</button>
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
		<video width="100%" height="500" controls>
		  <source src="/<?php echo $videoName ?>.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>