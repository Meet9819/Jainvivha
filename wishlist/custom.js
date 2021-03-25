

function addToShortlist(customerloginid, customerid) {
    try {
        actionAlert = document.getElementById('#actionAlert');
        actionAlertClasses = actionAlert.classList;
        actionAlertSpan = actionAlert.lastElementChild;
        if (!customerloginid) {
            actionAlertSpan.textContent = 'Please login to add customers to your shortlist!';
            actionAlertClasses.remove('hidden');
            actionAlertClasses.add('alert-warning');
            window.setTimeout(function () {
                actionAlertClasses.add('hidden');
                actionAlertClasses.remove('alert-warning');
                actionAlertSpan.textContent = '';
            }, 2000);
        } else if (!customerid) {
            actionAlertSpan.textContent = 'Could not add customers to your shortlist. Please try again!';
            actionAlertClasses.remove('hidden');
            actionAlertClasses.add('alert-danger');
            window.setTimeout(function () {
                actionAlertClasses.add('hidden');
                actionAlertClasses.remove('alert-danger');
                actionAlertSpan.textContent = '';
            }, 3000);
        } else {
            $.post('wishlistajax/shortlist.php', {
                
                customerloginid: customerloginid,
                customerid: customerid,
            }, 'json')
                .success(function () {
                    actionAlertSpan.textContent = 'Customers added to your shortlist successfully!';
                    actionAlertClasses.remove('hidden');
                    actionAlertClasses.add('alert-success');
                    window.setTimeout(function () {
                        actionAlertClasses.add('hidden');
                        actionAlertClasses.remove('alert-success');
                        actionAlertSpan.textContent = '';
                    }, 3000);
                })
                .error(function (e) {
                    if (e.status === 400) {
                        actionAlertSpan.textContent = 'This Customers is already in your shortlist!';
                        actionAlertClasses.remove('hidden');
                        actionAlertClasses.add('alert-info');
                        window.setTimeout(function () {
                            actionAlertClasses.add('hidden');
                            actionAlertClasses.remove('alert-info');
                            actionAlertSpan.textContent = '';
                        }, 3000);
                    } else {
                        actionAlertSpan.textContent = 'Could not add product to your shortlist. Please try again!';
                        actionAlertClasses.remove('hidden');
                        actionAlertClasses.add('alert-danger');
                        window.setTimeout(function () {
                            actionAlertClasses.add('hidden');
                            actionAlertClasses.remove('alert-danger');
                            actionAlertSpan.textContent = '';
                        }, 3000);
                    }
                });
        }
    } catch (e) {
        throw e;
    }
}




function addTolike(customerloginid, customerid) {
    try {
        actionAlert = document.getElementById('#actionAlert');
        actionAlertClasses = actionAlert.classList;
        actionAlertSpan = actionAlert.lastElementChild;
        if (!customerloginid) {
            actionAlertSpan.textContent = 'Please login to Like Customers';
            actionAlertClasses.remove('hidden');
            actionAlertClasses.add('alert-warning');
            window.setTimeout(function () {
                actionAlertClasses.add('hidden');
                actionAlertClasses.remove('alert-warning');
                actionAlertSpan.textContent = '';
            }, 2000);
        } else if (!customerid) {
            actionAlertSpan.textContent = 'Could not Like Customers. Please try again!';
            actionAlertClasses.remove('hidden');
            actionAlertClasses.add('alert-danger');
            window.setTimeout(function () {
                actionAlertClasses.add('hidden');
                actionAlertClasses.remove('alert-danger');
                actionAlertSpan.textContent = '';
            }, 3000);
        } else {
            $.post('wishlistajax/like.php', {
                
                customerloginid: customerloginid,
                customerid: customerid,
            }, 'json')
                .success(function () {
                    actionAlertSpan.textContent = 'You Like this Customers!';
                    actionAlertClasses.remove('hidden');
                    actionAlertClasses.add('alert-success');
                    window.setTimeout(function () {
                        actionAlertClasses.add('hidden');
                        actionAlertClasses.remove('alert-success');
                        actionAlertSpan.textContent = '';
                    }, 3000);
                })
                .error(function (e) {
                    if (e.status === 400) {
                        actionAlertSpan.textContent = 'You already Like this Customer!';
                        actionAlertClasses.remove('hidden');
                        actionAlertClasses.add('alert-info');
                        window.setTimeout(function () {
                            actionAlertClasses.add('hidden');
                            actionAlertClasses.remove('alert-info');
                            actionAlertSpan.textContent = '';
                        }, 3000);
                    } else {
                        actionAlertSpan.textContent = 'Could not add Customers in your Like List. Please try again!';
                        actionAlertClasses.remove('hidden');
                        actionAlertClasses.add('alert-danger');
                        window.setTimeout(function () {
                            actionAlertClasses.add('hidden');
                            actionAlertClasses.remove('alert-danger');
                            actionAlertSpan.textContent = '';
                        }, 3000);
                    }
                });
        }
    } catch (e) {
        throw e;
    }
}


function addToblocked(customerloginid, customerid) {
    try {
        actionAlert = document.getElementById('#actionAlert');
        actionAlertClasses = actionAlert.classList;
        actionAlertSpan = actionAlert.lastElementChild;
        if (!customerloginid) {
            actionAlertSpan.textContent = 'Please login to Block Customers';
            actionAlertClasses.remove('hidden');
            actionAlertClasses.add('alert-warning');
            window.setTimeout(function () {
                actionAlertClasses.add('hidden');
                actionAlertClasses.remove('alert-warning');
                actionAlertSpan.textContent = '';
            }, 2000);
        } else if (!customerid) {
            actionAlertSpan.textContent = 'Could not Block Customers. Please try again!';
            actionAlertClasses.remove('hidden');
            actionAlertClasses.add('alert-danger');
            window.setTimeout(function () {
                actionAlertClasses.add('hidden');
                actionAlertClasses.remove('alert-danger');
                actionAlertSpan.textContent = '';
            }, 3000);
        } else {
            $.post('wishlistajax/blocked.php', {
                
                customerloginid: customerloginid,
                customerid: customerid,
            }, 'json')
                .success(function () {
                    actionAlertSpan.textContent = 'You Blocked this Customers!';
                    actionAlertClasses.remove('hidden');
                    actionAlertClasses.add('alert-success');
                    window.setTimeout(function () {
                        actionAlertClasses.add('hidden');
                        actionAlertClasses.remove('alert-success');
                        actionAlertSpan.textContent = '';
                    }, 3000);
                })
                .error(function (e) {
                    if (e.status === 400) {
                        actionAlertSpan.textContent = 'You already Blocked this Customer!';
                        actionAlertClasses.remove('hidden');
                        actionAlertClasses.add('alert-info');
                        window.setTimeout(function () {
                            actionAlertClasses.add('hidden');
                            actionAlertClasses.remove('alert-info');
                            actionAlertSpan.textContent = '';
                        }, 3000);
                    } else {
                        actionAlertSpan.textContent = 'Could not add Customers in your Block List. Please try again!';
                        actionAlertClasses.remove('hidden');
                        actionAlertClasses.add('alert-danger');
                        window.setTimeout(function () {
                            actionAlertClasses.add('hidden');
                            actionAlertClasses.remove('alert-danger');
                            actionAlertSpan.textContent = '';
                        }, 3000);
                    }
                });
        }
    } catch (e) {
        throw e;
    }
}
