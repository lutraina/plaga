<?php $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];	
//if($REMOTE_ADDR == '134.90.138.4' ||  $REMOTE_ADDR =='177.34.21.8' || $REMOTE_ADDR == '83.154.194.160' || $REMOTE_ADDR == '62.147.224.95'){ ?>	
<div class="advantages">		<h2>Vantagens</h2>				<div class="row mb20">				<?php if(count($galeriaDestaque1)>0): ?>					<a href="/galeria/ver/<?= $galeriaDestaque1['Galeria']['id'] ?>">						<div class="box-post-destaque">							<div class="row">																	</div>							<div class="row">												</div>						</div>											</a>				<?php endif; ?>						</div>							</div>	<?php //} ?>	