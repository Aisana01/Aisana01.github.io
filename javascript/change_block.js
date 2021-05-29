var HIDDEN_CLASS_NAME = 'hidden'
var TARGET_CLASS_NAME = 'target'
var SOURCE_CLASS_NAME = 'source'
var targetIdToShow = 1
function main() {
    var targets = getElements(TARGET_CLASS_NAME)
    var sources = getElements(SOURCE_CLASS_NAME)
    sources.forEach(function (sourceNode) {
        var sourceNodeId = extractId(sourceNode, SOURCE_CLASS_NAME)
        //    console.log(sourceNode);
        sourceNode.addEventListener('click', function () {
            var btnPr = document.getElementById("myBtnPremium" + sourceNodeId.toString());
            if (btnPr.querySelector(".premium") != null) {
                classDiv = document.getElementById(window.location.hash.substr(1));
                IDblock_hash = extractId(classDiv, TARGET_CLASS_NAME);
                sourceNodeId = IDblock_hash;
                showTarget(targets, sourceNodeId)}
                else{
                    showTarget(targets, sourceNodeId)
            }
            showTarget(targets, sourceNodeId)
        })
    })
    showTarget(targets, targetIdToShow)
}

function getElements(type) {
    return [].slice.call(document.querySelectorAll('.' + type)).sort(function(targetNode1, targetNode2) {
        var target1Num = extractId(targetNode1, TARGET_CLASS_NAME)
        var target2Num = extractId(targetNode2, TARGET_CLASS_NAME)
        return target1Num > target2Num
    })
}

function extractId(targetNode, baseClass) {
    var currentClassIndex = targetNode.classList.length
    while (currentClassIndex--) {
        var currentClass = targetNode.classList.item(currentClassIndex)
        var maybeIdNum = parseInt(currentClass.split('-')[1])
        if (isNaN(maybeIdNum)) {
            continue
        }
        var classStrinToValidate = baseClass + '-' + maybeIdNum
        if (classStrinToValidate === currentClass) {
            return maybeIdNum
        }
    }
}

function showTarget(targets, targetId) {
    targets.forEach(function(targetNode, targetIndex) {
        var currentTargetNodeId = extractId(targetNode, TARGET_CLASS_NAME)
        if (currentTargetNodeId === targetId) {
            targetNode.classList.remove(HIDDEN_CLASS_NAME)
        } else {
            targetNode.classList.add(HIDDEN_CLASS_NAME)
        }
    })
}

main()

  //отображение блока где вызываешь из другой страницы
  classDiv = document.getElementById(window.location.hash.substr(1));
  IDblock_hash = extractId(classDiv, TARGET_CLASS_NAME);
  // hash_targets = getElements('target-' + IDblock_hash.toString());
  targetsBlock = getElements(TARGET_CLASS_NAME);
  showTarget(targetsBlock, IDblock_hash);