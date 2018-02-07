<!doctype html>
<html lang="vi">
<head>
    <meta charset="UuTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submiss-DemoInstall</title>
</head>
<body>
<div id="checkallsite">
    <div class="title">
        Check All Site.
    </div>

	<?php $task =
		"   Lay' data truoc'
		    3 loai. data: data-production, data-demoinstall, data-dev ( export tu` dev ra ): co' bao nhieu bo. thi` co' bay' nhieu cuc. data.
		    -------------------------------------
		    Demo install:
		    site/wp-admin
		    Educhain->backup Data->Create Content Backup Data->site-backup.zip
		    FTP to wp.swlabs.co
                Host: wp.swlabs.co
                id/pass: wp@swlabs.co / 56TT4aHak
                Protocal: FTP
		    FTP folder:
		        /demo-content/educhain/1.0(*)
		        change site-backup.zip tren do' -> site-backup.bak de? xui thi` backup lai.
		        coppy site-backup.zip o? local bo? vao` dat. ten thanh` educhain_site.zip(*)
		    code/theme/framework-customizations/theme/manifest.php
		    -- \$manifest['backup_demos']
		    (1)-tên của file trên server.
		    (2)- (3) tên của title và description lấy trong này https://docs.google.com/document/d/17FvQcorGQvrjdEJrj1xQqtV_uTHaYiNTwRklWBCMkCs/edit#
		    Lay' hinh`
            smb://192.168.301/33/2018.253/solazu_drive/02_Themeforest/EDUCATION/04_Showcase/Image_Live_Setting user: solazu pass : @bcd12345
            (4)-350x240_site.png ->educhain_site_name.png (5) 1200x900_site.png ->preview_educhain_site_name.png
            (6)- site name
            (7)- name of number folder ftp /demo-content/educhain/1.0   => 1.0
            (8)- Add required plugin if needed. 
		'educhain_software_academy(1)'   => array(
        'title'            => esc_html__( '(2)', 'educhain' ),
        'screenshot'       => esc_url( get_template_directory_uri() . '/static/img/demo-images/(4)' ),
        'large_screenshot' => esc_url( get_template_directory_uri() . '/static/img/demo-images/(5)' ),
        'preview_link'     => esc_url( 'https://educhain.rubikthemes.com/(6)/' ),
        'version'          => '(7)',
        'description'      => esc_html__( '(3)', 'educhain' ),
        'requirement'      => array(
            'wp_version'          => '4.4',
            'multisite'           => false,
            'debug'               => false,
            'memory_limit'        => '40M',
            'php_version'         => '5.6',
            'php_post_max_size'   => '128M',
            'php_time_limit'      => '300',
            'php_max_input_vars'  => '1000',
            'suhosin'             => false,
            'ziparchive'          => true,
            'mysql_version'       => '5.5',
            'php_max_upload_size' => '8M',
            'fsockopen_curl'      => true,
        ),
        'plugins'          => array(
            'required'  => array( 'revslider', 'js_composer', 'learnmaster', 'solazu-unyson', (8) ),
            'recommend' => array( 'newsletter', 'contact-form-7' ),
        ),
            ),    
		    ------------------------------------------
		     
		    
		    -- \$manifest['plugins']  
		    
		    
		    (1)- coppy plugin để vào theme/plugins
		    (2)- vào /static/img/tgm-images duplicate 1 cái hình của plugin trước ra rồi đổi tên thành site.
		    (3)- tên file trong theme/plugins bỏ zip
		    array(
            'name'               => esc_html__( 'Lema Software', 'educhain' ),
            'slug'               => '(3)',
            'source'             => esc_html( EDUCHAIN_PLUGIN_DIR . '/lema-software.zip' (1) ),
            'required'           => false,
            'force_activation'   => false,
            'force_deactivation' => false,
            'image_url'          => esc_url( EDUCHAIN_PLUGIN_IMG_URI . '/lema-software.jpg (2)' ),
            'desc'               => esc_html__( 'One plugin of Learn Master.', 'educhain' ),
            ),
            Test trên local theme-setting demo-install được chưa. bấm về install thử.
            ---------------------------------------
            Release
            viết code/theme/framework-customizations/theme/views/change-log.php 
            viết changelog code/theme/change_log.txt
            
            
            ----------------------------
            Release plugin
            check xem site mới thì có plugin nào thay đổi. release mọi plugin đã thay đổi.
            Require permission master of theme/plugin.
            git checkout develop
            git fetch
            git pull origin develop
            Check which tags version in server: example: 1.1.19 is the lastest in server
            git flow release start 1.1.20
            change version ++ in plugin-name.php
            git commit -am \"release 1.1.20\"
            git flow release finish 1.1.20
            git push origin master
            git push origin develop
            git push origin --tags
            composer update --no-dev
            delete .git .gitignore+
            zip file lai. bỏ vào theme
            ---------------------------
            
            Release theme
            Test kỹ trước trên DEV.
            Hỏi front-end xem có thay đổi gì trên branch dev của các project không
            Design review ok trên dev.
            Mình review ok trên dev.
            
            Check xem theme of educhain theme add required plugin for demo chưa vào code/theme/framework-customizations/theme/manifest.php
            Require permission master of theme/plugin.
            git checkout develop
            git fetch
            git pull origin develop
            Check which tags version in server: example: 1.1.19 is the lastest in server
            git flow release start 1.1.20
            change version ++ in plugin-name.php
            before commit -am \"release 1.1.20\"
            coppy all plugin.zip have changed add or replace it into theme/plugins/ and then commit.
            git flow release finish 1.1.20
            git push origin master
            git push origin develop
            git push origin --tags
            
            kêu anh Long deploy lên staging test.
                        staging ok thì deploy lên production
            ----------------------------------------
            Dong' goi'.
            
            get data-demo-dev bỏ vào. code/theme/setup/data-master
            len server lay ban? submit lastest ve`.smb://192.168.3.253/solazu_drive/02_Themeforest/EDUCATION/03_Submission/WP
            sua? file style.css cua? educhild-theme len version release.
            coppy theme ở local mình vừa release change name thành educhain rồi bỏ cạnh educhild-theme.
            xóa .idea .git .gitignore.  Zip theme lại ngay tại đó. coppy một bản zip lùi ra 1 folder
            vao` /home/thang/donggoi/20180201/version 1.1.25/educhain_v1.1.25/documentation
                -update lai. ngay` lastest update
                -viet' guild neu' co'
            update local/20180201/version 1.1.25/educhain_v1.1.25/demo-content:
                -data-demo-production dạng xml bỏ vào nếu có trực đưa.
            update Folder local/20180201/version 1.1.25/educhain_v1.1.25/content/ slider-example neu' co' data cua? wordpress admin export tu` Production ve`.";
	$task = explode( "\n", $task );
	//	print_r( $task );
	?>
</div>
<div id="staging">
    <div class="step-1">
        <div class="title">
            Release theme, plugin.
        </div>
        <div class="list-todo">

        </div>
    </div>

</div>
<div id="production">

</div>
<div id="submiss">
    <ol>
		<?php foreach ( $task as $item ):
			?>
			<?php if ( strlen( trim( $item ) ) > 0 ): ?>

            <li>
                <input type="checkbox" value=""><?php echo $item; ?>
            </li>
		<?php endif; ?>

		<?php

		endforeach; ?>
    </ol>
</div>

<div id="staging" class="staging-rubikthemes">

</div>
<div id="production" class="production-rubikthemes">

</div>
<div id="submiss" class="submission">

</div>


</body>
</html>