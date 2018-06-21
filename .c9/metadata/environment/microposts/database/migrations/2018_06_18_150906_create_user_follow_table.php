{"filter":false,"title":"2018_06_18_150906_create_user_follow_table.php","tooltip":"/microposts/database/migrations/2018_06_18_150906_create_user_follow_table.php","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":16,"column":37},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":17,"column":0},"end":{"row":17,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":17,"column":12},"end":{"row":18,"column":62},"action":"insert","lines":["$table->integer('user_id')->unsigned()->index();","            $table->integer('follow_id')->unsigned()->index();"],"id":3}],[{"start":{"row":19,"column":33},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":20,"column":0},"end":{"row":20,"column":12},"action":"insert","lines":["            "]},{"start":{"row":20,"column":12},"end":{"row":21,"column":0},"action":"insert","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":21,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":21,"column":12},"end":{"row":23,"column":93},"action":"insert","lines":["// Foreign key setting","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","            $table->foreign('follow_id')->references('id')->on('users')->onDelete('cascade');"],"id":5}],[{"start":{"row":23,"column":93},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":24,"column":0},"end":{"row":24,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":24,"column":8},"end":{"row":24,"column":12},"action":"remove","lines":["    "],"id":7}],[{"start":{"row":24,"column":8},"end":{"row":24,"column":9},"action":"insert","lines":[" "],"id":8},{"start":{"row":24,"column":9},"end":{"row":24,"column":10},"action":"insert","lines":[" "]},{"start":{"row":24,"column":10},"end":{"row":24,"column":11},"action":"insert","lines":[" "]},{"start":{"row":24,"column":11},"end":{"row":24,"column":12},"action":"insert","lines":[" "]}],[{"start":{"row":24,"column":12},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":25,"column":0},"end":{"row":25,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":25,"column":12},"end":{"row":26,"column":53},"action":"insert","lines":[" // Do not allow duplication of combination of user_id and follow_id","            $table->unique(['user_id', 'follow_id']);"],"id":10}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":26,"column":53},"end":{"row":26,"column":53},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529302693661,"hash":"1d1c6a0d69301f5a8938cbc96d05305cb75742dc"}