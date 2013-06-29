

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><?php echo $projectName; ?></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
				<?php
				foreach($navBarPages as $aPage){
					echo '<li';
					if($aPage['filename'] == $curPage['filename']){
						echo ' class="active"';
					}
					echo '><a href="' . $aPage['filename'] . '">' . $aPage['buttonTitle'] . "</a></li>\n";
				}
				?>					
                        </ul>
                        <form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email">
                            <input class="span2" type="password" placeholder="Password">
                            <button type="submit" class="btn">Sign in</button>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
