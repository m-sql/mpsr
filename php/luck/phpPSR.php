<?php
/**
 * PSR 是 PHP Standard Recommendations 的简写
 * @since https://psr.phphub.org/
 * Class PSRLearning
 */
class PSRLearning
{
    use Hack;
    /**
     * PHP标准规范 自定符
     */
    public static $M_PSR = <<<EOL
    _   _ _             ____  ____  ____  
   | | | (_)  _ __ ___ |  _ \/ ___||  _ \ 
   | |_| | | | '_ ` _ \| |_) \___ \| |_) |
   |  _  | | | | | | | |  __/ ___) |  _ < 
   |_| |_|_| |_| |_| |_|_|   |____/|_| \_\
   @Author : Luck Li Di
   @Email  : lucklidi@126.com
   @version: v1.0.0
   @Lets`go: Learning PHP Standard Recommendations

EOL;
    /**
     * 基础编码规范:
     * ①：PHP 代码文件 必须 以 <?php 或 <?= 标签开始；
     * PHP 代码文件 必须 以 不带 BOM 的 UTF-8 编码；
     * ②：PHP 代码中 应该 只定义类、函数、常量等声明，或其他会产生 副作用 的操作（如：生成文件输出以及修改 .ini 配置文件等），二者只能选其一；
     * 命名空间以及类 必须 符合 PSR 的自动加载规范：PSR-4 中的一个；
     * ③：类的命名 必须 遵循 StudlyCaps 大写开头的驼峰命名规范；
     * ④：类中的常量所有字母都 必须 大写，单词间用下划线分隔；
     * ⑤：方法名称 必须 符合 camelCase 式的小写开头驼峰命名规范
     */
    public function psr1()
    {
        echo __FUNCTION__;
    }

    /**
     * 编码风格规范:
     * ①：代码 必须 使用 4 个空格符而不是「Tab 键」进行缩进；常量 true 、false 和 null 也 必须 全部小写！
     * 每行的字符数 应该 软性保持在 80 个之内，理论上 一定不可 多于 120 个，但 一定不可 有硬性限制。
     * ②：每个 namespace 命名空间声明语句和 use 声明语句块后面，必须 插入一个空白行。
     * 类的开始花括号（{） 必须 写在类声明后自成一行，结束花括号（}）也 必须 写在类主体后自成一行。
     * ③：方法的开始花括号（{） 必须 写在函数声明后自成一行，结束花括号（}）也 必须 写在函数主体后自成一行。
     * 类的属性和方法 必须 添加访问修饰符（private、protected 以及 public），abstract 以及 final 必须 声明在访问修饰符之前，而 static 必须 声明在访问修饰符之后。
     * ④：控制结构的关键字后 必须 要有一个空格符，而调用方法或函数时则 一定不可 有。
     * 控制结构的开始花括号（{） 必须 写在声明的同一行，而结束花括号（}） 必须 写在主体后自成一行。
     * ⑤：控制结构的开始左括号后和结束右括号前，都 一定不可 有空格符
     * switch ($expr) {
     *    case 0:
     *       echo 'First case, with a break';
     *       break;
     *    case 1:
     *       echo 'Second case, which falls through';
     *       // no break
     *    case 2:
     *    case 3:
     *    case 4:
     *       echo 'Third case, return instead of break';
     *       return;
     *    default:
     *       echo 'Default case';
     *       break;
     * }
     */
    public function psr2()
    {
        echo __FUNCTION__;
    }

    /**
     * 日志接口规范:
     * ①：LoggerInterface 接口对外定义了八个方法，分别用来记录 RFC 5424 中定义的八个等级的日志
     * debug、 info、 notice、 warning、 error、 critical、 alert 以及 emergency 。
     * ②：第九个方法 —— log，其第一个参数为记录的等级。可使用一个预先定义的等级常量作为参数来调用此方法，必须 与直接调用以上八个方法具有相同的效果。
     * 如果传入的等级常量参数没有预先定义，则 必须 抛出 Psr\Log\InvalidArgumentException 类型的异常。
     * 在不确定的情况下，使用者 不该 使用未支持的等级常量来调用此方法
     * const EMERGENCY = 'emergency';    //系统不可用
     * const ALERT     = 'alert';        //**必须**立刻采取行动
     * const CRITICAL  = 'critical';     //紧急情况
     * const ERROR     = 'error';        //运行时出现的错误，不需要立刻采取行动，但必须记录下来以备检测。
     * const WARNING   = 'warning';      //出现非错误性的异常。
     * const NOTICE    = 'notice';       //一般性重要的事件。
     * const INFO      = 'info';         //重要事件
     * const DEBUG     = 'debug';        //debug 详情
     * function interpolate($message, array $context = array())
     * {
     *    // 构建一个花括号包含的键名的替换数组
     *    $replace = array();
     *
     *    foreach ($context as $key => $val) {
     *       $replace['{' . $key . '}'] = $val;
     *    }
     *
     *    // 替换记录信息中的占位符，最后返回修改后的记录信息。
     *    return strtr($message, $replace);
     * }
     * // 含有带花括号占位符的记录信息。
     * $message = "User {username} created";
     *
     * // 带有替换信息的上下文数组，键名为占位符名称，键值为替换值。
     * $context = array('username' => 'bolivar');
     *
     * // 输出 "Username bolivar created"
     * echo interpolate($message, $context);
     */
    public function psr3()
    {
        echo __FUNCTION__;
    }

    /**
     * 自动加载规范:
     * ①：此处的「类」泛指所有的「Class 类」、「接口」、「traits 可复用代码块」以及其它类似结构。
     * ②：一个完整的类名需具有以下结构:
     *   \<命名空间>(\<子命名空间>)*\<类名>
     *   完整的类名 必须 要有一个顶级命名空间，被称为 "vendor namespace"；
     *   完整的类名 可以 有一个或多个子命名空间；
     *   完整的类名 必须 有一个最终的类名；
     *   完整的类名中任意一部分中的下滑线都是没有特殊含义的；
     *   完整的类名 可以 由任意大小写字母组成；
     *   所有类名都 必须 是大小写敏感的。
     * ③：当根据完整的类名载入相应的文件
     *
     */
    public function psr4()
    {
        echo __FUNCTION__;
    }

}

/**
 * cli 输入参数 数组
 */
$param_arr   = $argv;

/**
 * 标识输出
 */
$m_psr = PSRLearning::$M_PSR . PHP_EOL;

//---------------------------------------------------------------------------------------------------------------------
/**
 * 帮助信息：mpsr -h
 */
//---------------------------------------------------------------------------------------------------------------------
if (isset(array_flip($param_arr)['-h'])) {
    echo $m_psr;
    echo <<<EOL
参数说明：

-q    : 查找PSR规范 eg:(mpsr -q "psr1"  或者 mpsr -q "psr1")

-h    : help something

-hack : Google 骇客 search
.

EOL;
    die;
}

//---------------------------------------------------------------------------------------------------------------------
/**
 * hacker信息：mpsr -hack
 */
//---------------------------------------------------------------------------------------------------------------------
if (isset(array_flip($param_arr)['-hack'])) {
    try {
        $class_name = 'Hack';
        $reflection = new ReflectionClass ( $class_name );
        $is_find = false;
        foreach ($reflection->getMethods() as $key=>$method) {
                $methodDoc = $reflection->getMethods()[$key]->getDocComment();
                echo "恭喜你，找到了它: {$class_name} ^_^" . PHP_EOL;
                echo $methodDoc . PHP_EOL;
                $is_find = true;
        }
        if (!$is_find) {
            echo 'Hacker，请重试一下^_-' . PHP_EOL;
            echo '如果没有，请联系Hacker：Email:lucklidi@126.com' . PHP_EOL;
        }
        exit("---the end---\n");
    } catch (Exception $e) {
        echo 'error=' . $e->getMessage() . PHP_EOL;
    }
    die;
}

//---------------------------------------------------------------------------------------------------------------------
/**
 * 执行psr查询
 * mpsr -q psr4
 */
//---------------------------------------------------------------------------------------------------------------------
if (isset(array_flip($param_arr)['-q'])) {

    $q_key   = array_flip($param_arr)['-q'];
    $q_value = $param_arr[$q_key+1];
    if (!strpos($q_value,'sr')) {
        echo "mpsr语句错误，请认真核对后重试，eg: mpsr -q \"psr1\"  或者 mpsr -q \"psr1\"" . PHP_EOL;
        echo <<<EOL

查看帮助信息，请输入 -h
.

EOL;
        die;
    }
    /**
     * 执行查询
     */
    try {
        $class_name = 'PSRLearning';
        $reflection = new ReflectionClass ( $class_name );
        //通过反射获取类的注释
        //$doc = $reflection->getDocComment ();
        $is_find = false;
        foreach ($reflection->getMethods() as $key=>$method) {
            if (trim($method->name) === trim($q_value)) {
                $methodDoc = $reflection->getMethods()[$key]->getDocComment();
                echo "恭喜你，找到了它: {$q_value} ^_^" . PHP_EOL;
                echo $methodDoc . PHP_EOL;
                $is_find = true;
            }
        }
        if (!$is_find) {
            echo '通知你，再试一下^_-' . PHP_EOL;
            echo '如果没有，请联系开发者：Email:lucklidi@126.com' . PHP_EOL;
        }
        exit("---the end---\n");
    } catch (Exception $e) {
        echo 'error=' . $e->getMessage() . PHP_EOL;
    }
}